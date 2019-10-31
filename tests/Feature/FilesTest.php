<?php

namespace Tests\Feature;

use App\File;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FilesTest extends TestCase
{
    use DatabaseMigrations;
    
    public function test_user_can_upload_a_file(): void
    {
        $this->markTestIncomplete('TODO');
        $this->withoutExceptionHandling();
        Storage::fake('local');

        $user = factory(User::class)->create();
        $fileName = 'photo1.jpg';

        $this->actingAs($user)->postJson(
            '/files',
            [UploadedFile::fake()->image($fileName)]
        );

        Storage::disk('local')->assertExists($fileName);
        $this->assertEquals(
            $fileName,
            $user->files()->getFirstMedia()->name
        );
    }

    public function test_user_can_see_their_files(): void
    {
        // User creates file
        $user = factory(User::class)->create();
        $file1 = factory(File::class)->make();
        $file2 = factory(File::class)->make();
        $user->files()->save($file1);
        $user->files()->save($file2);

        // visit filesystem page, see file.
        $this->actingAs($user)
            ->get('/files')
            ->assertSeeText($file1->name)
            ->assertSeeText($file2->name);
    }
}
