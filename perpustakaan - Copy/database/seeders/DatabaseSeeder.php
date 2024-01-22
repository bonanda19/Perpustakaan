<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'nama' => 'asd',
            'username' => 'asd',
            'password' => bcrypt('asd')
        ]);

        Book::create([
            'Judul' => 'Buku 1',
            'slug' => 'Buku-1',
            'Jilid' => 'Jilid 1',
            'Tahun' => '2023',
            'NoLemari' => '1',
            'Bagian' => 'A',
        ]);
        Book::create([
            'Judul' => 'Buku 2',
            'slug' => 'Buku-2',
            'Jilid' => 'jilid 2',
            'Tahun' => '2023',
            'NoLemari' => '1',
            'Bagian' => 'B',
        ]);
        Book::create([
            'Judul' => 'Buku 3',
            'slug' => 'Buku-3',
            'Jilid' => 'Jilid1',
            'Tahun' => '2023',
            'NoLemari' => '1',
            'Bagian' => 'B',
        ]);
        Book::create([
            'Judul' => 'Buku 1',
            'slug' => 'Buku-1-',
            'Jilid' => 'Jilid 3',
            'Tahun' => '2023',
            'NoLemari' => '1',
            'Bagian' => 'A',
        ]);
        Book::create([
            'Judul' => 'Buku 4',
            'slug' => 'Buku-4',
            'Jilid' => 'Jilid 2',
            'Tahun' => '2023',
            'NoLemari' => '1',
            'Bagian' => 'A',
        ]);

    }
}
