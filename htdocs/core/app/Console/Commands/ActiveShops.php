<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tenant;
use Illuminate\Support\Facades\Http;

class ActiveShops extends Command
{
    protected $signature = 'find-active-shops';
    protected $description = 'Identify active shops based on product creation';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Fetch all tenants
        $tenants = Tenant::all();

        foreach ($tenants as $tenant) {
            try {
                // Switch to tenant's database connection
                tenancy()->initialize($tenant);

                // Check for active products
                $activeProducts = \DB::table('products')
                    ->where('created_at', '>=', now()->subMonths(3)) // Example: Products created in the last 3 months
                    ->count();


                // Check for active products
                $activePages = \DB::table('pages')
                    ->where('created_at', '>=', now()->subMonths(3)) // Example: Products created in the last 3 months
                    ->count();
                // Logic to determine if the tenant is active based on product count or any other criteria
                if ($activeProducts > 0 || $activePages > 5) {
                    $this->info("Tenant {$tenant->id} is active with {$activeProducts} products.");
                    $response = Http::get('https://script.google.com/macros/s/AKfycbyZ8BYt7H-lZFmTQ3d4RiLKb8ZN2UZz4510z6KxghyfshbZo3-gZDH3wXc8mL3HG0Nv/exec?gid=0&last_updated_products='.$activeProducts.'&last_updated_pages='.$activePages.'&tennat='.$tenant->id);
                    // Perform additional actions if needed
                } else {
                    //$this->info("Tenant {$tenant->name} is inactive.");
                }
            } catch (\Throwable $throwable) {
                dump($throwable->getMessage());

            }
        }

        return 0;
    }
}
