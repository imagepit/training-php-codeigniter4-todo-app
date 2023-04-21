<?php

namespace Tests\Feature;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class TodoTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testGetIndex()
    {
        // $tihs->baseURL = 'http://localhost:8080/';
        $result = $this->call('get', '/todo');
        // dd($result);
        $result->assertStatus(200);
        $result->assertSee('<title>TODOアプリ</title>');
        $result->assertSee('<h1>TODOアプリ</h1>');
    }

    public function testPostRequest()
    {
        $csrf = csrf_hash();
        $data = [
          'title' => 'todo test1',
          'csrf_test_name' => $csrf,
        ];
        $result = $this->call('post', '/todo', $data);
        // dd($result);
        $result->assertStatus(200);
    }
}