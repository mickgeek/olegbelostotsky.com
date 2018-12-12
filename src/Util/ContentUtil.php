<?php

namespace App\Util;

use App\Kernel;

class ContentUtil
{
    public static function getPosts(): array
    {
        $dir = (new Kernel())->getPublicDir() . '/statics/posts';
        $posts = [];
        if ($handle = opendir($dir)) {
            while (($entry = readdir($handle)) !== false) {
                if (preg_match('/^(\d{4})-(\d{2})-(\d{2})-(\d{3})\.md$/', $entry, $matches)) {
                    $html = (new \Parsedown())->text(file_get_contents("{$dir}/{$entry}"));
                    $dom = new \DOMDocument();
                    $dom->loadHTML($html);
                    $header = '(no header)';
                    foreach ($dom->getElementsByTagName('h1') as $element) {
                        $header = $element->textContent;
                        break;
                    }

                    $id = (int) $matches[4];
                    $day = $matches[3];
                    $month = $matches[2];
                    $year = $matches[1];
                    $date = ($day === '00' || $month === '00') ? (new \DateTimeImmutable("{$year}-01-01"))->format('Y')
                        : (new \DateTimeImmutable("{$year}-{$month}-{$day}"))->format('M j, Y');
                    $posts[$id] = [
                        'date' => $date,
                        'title' => utf8_decode($header),
                        'content' => $html,
                    ];
                }
            }
            closedir($handle);
        }
        krsort($posts);

        return $posts;
    }
}
