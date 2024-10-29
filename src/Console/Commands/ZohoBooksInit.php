<?php

namespace Sumer5020\ZohoBooks\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;

class ZohoBooksInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zoho:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CreateContactRule ZOHO Books token credentials';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        try {
            $token = ZohoBooksFacade::authentications()->createAccessToken();
            $this->info('Created successfully.');
            if (config('app.env') == 'local') {
                $this->info('Token: ' . $token);
            }
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
