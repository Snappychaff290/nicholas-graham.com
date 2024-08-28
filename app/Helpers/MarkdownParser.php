<?php

namespace App\Helpers;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\CommonMarkConverter;

class MarkdownParser
{
    public static function parse($filename)
    {
        $content = file_get_contents($filename);
        $parsed = YamlFrontMatter::parse($content);
        
        $converter = new CommonMarkConverter();
        $htmlContent = $converter->convert($parsed->body());

        return [
            'meta' => $parsed->matter(),
            'content' => $htmlContent,
        ];
    }

    public static function getAll($directory)
    {
        $files = glob($directory . '/*.md');
        $parsed = [];

        foreach ($files as $file) {
            $filename = basename($file, '.md');
            $parsed[$filename] = self::parse($file);
        }

        // Sort by date
        uasort($parsed, function ($a, $b) {
            return strtotime($b['meta']['date']) - strtotime($a['meta']['date']);
        });

        return $parsed;
    }
}