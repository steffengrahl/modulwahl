<?php

declare(strict_types=1);

namespace App\Steffen;

class Courses
{
    public function __construct(private readonly array $courses)
    {}

    public function fetch(array $selected_courses, string $semester): array
    {
        $courses = [];
        $get_conditions = [0];

        if ($selected_courses !== []) {
            $get_conditions = array_merge($get_conditions, $selected_courses);
        }

        foreach ($this->courses as $course) {
            if (count(array_diff($course['conditions'], $get_conditions)) === 0) {

                $courses[] = [
                    'id' => $course['id'],
                    'name' => $course['name'],
                    'wpf' => $course['compulsory'],
                    'semester' => sprintf(
                        '%s/%s',
                        $course['ss'] ? 'SS' : '--',
                        $course['ws'] ? 'WS' : '--'
                    ),
                    'assignable' => $course[$semester] ?? false,
                ];
            }
        }

        return $courses;
    }

    public function sortBySemester(): self
    {
        usort($this->courses, static fn($a, $b) => $a['semester'] <=> $b['semester']);

        return $this;
    }
}
