<?php

namespace App\Models;

use CodeIgniter\Model;

class DynamicCoursePageModel extends Model
{
    protected $table = 'dynamic_course_pages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'slug',
        'template_key',
        'course_name',
        'location',
        'meta_title',
        'meta_description',
        'body_content',
        'schema_json',
        'search_engine_indexing',
        'search_engine_crawling',
        'status',
        'created_id',
        'created_on',
        'modified_id',
        'modified_on',
    ];

    public function getActivePageBySlug(string $slug): ?array
    {
        $slug = trim(strtolower($slug), '/');

        return $this->where('slug', $slug)
            ->where('status', 'ACTIVE')
            ->first();
    }

    public function getPageSections(int $pageId): array
    {
        try {
            return $this->buildPageSections($pageId);
        } catch (\Throwable $e) {
            log_message('error', 'Dynamic course module lookup failed for page '.$pageId.': '.$e->getMessage());
            return [];
        }
    }

    private function buildPageSections(int $pageId): array
    {
        $db = $this->db;
        $banner = $db->table('dynamic_course_banners')->where('page_id', $pageId)->get()->getRowArray();
        $intro = $db->table('dynamic_course_intro')->where('page_id', $pageId)->get()->getRowArray();
        $fees = $db->table('dynamic_course_fees')->where('page_id', $pageId)->get()->getRowArray();

        $cards = $db->table('dynamic_course_cards')
            ->where('page_id', $pageId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        $highlights = $db->table('dynamic_course_highlights')
            ->where('page_id', $pageId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        $semesters = $db->table('dynamic_course_semesters')
            ->where('page_id', $pageId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        foreach ($semesters as &$semester) {
            $semester['subjects'] = array_column(
                $db->table('dynamic_course_semester_subjects')
                    ->where('semester_id', $semester['id'])
                    ->orderBy('sort_order', 'ASC')
                    ->orderBy('id', 'ASC')
                    ->get()
                    ->getResultArray(),
                'subject_name'
            );

            $semester['software'] = $db->table('dynamic_course_semester_software')
                ->select('software_name AS name, software_image AS image')
                ->where('semester_id', $semester['id'])
                ->orderBy('sort_order', 'ASC')
                ->orderBy('id', 'ASC')
                ->get()
                ->getResultArray();
        }
        unset($semester);

        $faculties = $db->table('dynamic_course_faculties')
            ->where('page_id', $pageId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        $careers = $db->table('dynamic_course_careers')
            ->where('page_id', $pageId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        foreach ($careers as &$career) {
            $career['roles'] = array_column(
                $db->table('dynamic_course_career_roles')
                    ->where('career_id', $career['id'])
                    ->orderBy('sort_order', 'ASC')
                    ->orderBy('id', 'ASC')
                    ->get()
                    ->getResultArray(),
                'role_name'
            );
        }
        unset($career);

        $placements = array_column(
            $db->table('dynamic_course_placements')
                ->where('page_id', $pageId)
                ->orderBy('sort_order', 'ASC')
                ->orderBy('id', 'ASC')
                ->get()
                ->getResultArray(),
            'image'
        );

        $faqs = $db->table('dynamic_course_faqs')
            ->where('page_id', $pageId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        $sections = [];

        if ($banner) {
            $sections['banner'] = [
                'image' => $banner['image'],
                'alt' => $banner['alt_text'],
                'heading' => $banner['heading'],
            ];
        }

        if ($cards) {
            $sections['course_cards'] = array_map(static function ($card) {
                return [
                    'title' => $card['title'],
                    'duration' => $card['duration'],
                    'image' => $card['image'],
                    'link' => $card['link'],
                    'active' => $card['is_active'] === 'Y',
                ];
            }, $cards);
        }

        if ($intro) {
            $paragraphs = [];
            foreach (['paragraph_1', 'paragraph_2', 'paragraph_3'] as $paragraphField) {
                if (!empty($intro[$paragraphField])) {
                    $paragraphs[] = $intro[$paragraphField];
                }
            }

            $sections['intro'] = [
                'image' => $intro['image'],
                'image_alt' => $intro['image_alt'],
                'title' => $intro['title'],
                'highlights' => array_column($highlights, 'title'),
                'paragraphs' => $paragraphs,
            ];

            $sections['course_details'] = [
                'tag' => $intro['course_tag'],
                'heading' => $intro['details_heading'],
                'description' => $intro['details_description'],
                'course_title' => $intro['course_title'],
                'duration' => $intro['course_duration'],
                'module_image' => $intro['module_image'],
                'module_image_alt' => $intro['module_image_alt'],
            ];
        }

        if ($semesters) {
            $sections['semesters'] = $semesters;
        }

        if ($fees) {
            $sections['fees'] = [
                'tag' => $fees['tag'],
                'heading' => $fees['heading'],
                'fee_label' => $fees['fee_label'],
                'note' => $fees['note'],
                'amount' => $fees['amount'],
                'cards' => [
                    [
                        'icon' => $fees['card_1_icon'],
                        'text' => $fees['card_1_text'],
                        'width' => $fees['card_1_icon_width'],
                    ],
                    [
                        'icon' => $fees['card_2_icon'],
                        'text' => $fees['card_2_text'],
                        'width' => $fees['card_2_icon_width'],
                    ],
                ],
                'payment_note' => $fees['payment_note'],
            ];
        }

        if ($faculties) {
            $sections['faculties'] = $faculties;
        }

        if ($careers) {
            $sections['career'] = [
                'tag' => 'Future Leaders',
                'heading' => 'Career Opportunity',
                'description' => !empty($intro['career_description']) ? $intro['career_description'] : '',
                'cards' => $careers,
            ];
        }

        if ($placements) {
            $sections['placements'] = $placements;
        }

        if ($faqs) {
            $sections['faqs'] = array_map(static function ($faq) {
                return [
                    'question' => $faq['question'],
                    'answer' => $faq['answer'],
                ];
            }, $faqs);
        }

        return $sections;
    }
}
