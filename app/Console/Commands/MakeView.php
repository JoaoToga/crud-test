<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    protected $signature = 'make:view {name}';
    protected $description = 'Create a new Blade view file';

    public function handle()
    {
        $name = $this->argument('name');

        // Caminho completo da view
        $path = resource_path('views/' . str_replace('.', '/', $name) . '.blade.php');

        // Cria diretório se não existir
        $directory = dirname($path);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        // Cria o arquivo se ainda não existir
        if (File::exists($path)) {
            $this->error('A view já existe!');
            return;
        }

        File::put($path, "<!-- View: $name -->");

        $this->info("View criada com sucesso: resources/views/{$name}.blade.php");
    }
}
