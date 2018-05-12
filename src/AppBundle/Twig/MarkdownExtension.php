<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 12.05.2018
 * Time: 14:59
 */

namespace AppBundle\Twig;


use AppBundle\Service\MarkdownTransformer;
use Twig\Extension\AbstractExtension;

class MarkdownExtension extends AbstractExtension
{

    private $markdownTransformer;

    public function __construct(MarkdownTransformer $markdownTransformer)
    {
        $this->markdownTransformer = $markdownTransformer;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('markdownify', array($this, 'parseMarkdown'), [
                'is_safe'  => ['html'],
            ])
        );
    }

    public function parseMarkdown($str)
    {
        return $this->markdownTransformer->parse($str);
    }

}