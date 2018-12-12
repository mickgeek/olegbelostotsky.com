<?php

namespace App\Util;

use PHPUnit\Framework\TestCase;

class ContentUtilTest extends TestCase
{
    public function testGetPosts()
    {
        $posts = ContentUtil::getPosts();
        foreach ($posts as $id => $post) {
            $this->assertInternalType('int', $id);
            $this->assertInternalType('string', $post['date']);
            $this->assertInternalType('string', $post['title']);
            $this->assertInternalType('string', $post['content']);
        }
    }
}
