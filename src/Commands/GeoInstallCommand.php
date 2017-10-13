<?php

namespace Kaiwh\Geo\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class GeoInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geo:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Geo install!';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filesystem = new Filesystem;
        $filesystem->copyDirectory(
            __DIR__ . '/stubs/install',
            base_path()
        );
        $this->call('migrate', ['--path' => str_replace(base_path(), '', __DIR__) . '/../../migrations/']);
        $this->call('db:seed', ['--class' => \Kaiwh\Geo\Seeds\GeoProvinceTableSeeder::class]);
        $this->call('db:seed', ['--class' => \Kaiwh\Geo\Seeds\GeoCityTableSeeder::class]);
        $this->call('db:seed', ['--class' => \Kaiwh\Geo\Seeds\GeoDistrictTableSeeder::class]);
    }

}
