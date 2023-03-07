<?php

namespace App\Console\Commands;

use App\Adapters\MarkaziyBankAdapter;
use App\Models\Currency;
use Exception;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class UpdateCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will update currencies in currencies table';
    private MarkaziyBankAdapter $adapter;

    public function __construct()
    {
        parent::__construct();

        $this->adapter = new MarkaziyBankAdapter();
    }

    /**
     * Execute the console command.
     *
     * @throws Exception
     */
    public function handle(): int
    {
        $currencies = $this->adapter->getCurrencies();
        $this->addToDatabase($currencies);

        return CommandAlias::SUCCESS;
    }


    /**
     * @param array $currencies
     * @return int
     */
    protected function addToDatabase(array $currencies): int
    {
        $filtered_currencies = $this->filter($currencies);

        Currency::query()->updateOrCreate(['code' => "UZS"], [
            'value' => 1,
            'name' => "Uzbek sum"
        ]);
        foreach ($filtered_currencies as $currency) {
            Currency::query()->updateOrCreate(['code' => $currency['Ccy']], [
                'value' => $currency['Rate'],
                'name' => $currency['CcyNm_EN']
            ]);
        }
        $this->output->info("Currency Updated successfully");

        return CommandAlias::SUCCESS;
    }

    protected function filter(array $currencies): array
    {
        $currency_names = ["EUR", "USD", "RUB"];
        return array_filter($currencies, fn(array $currency) => in_array($currency["Ccy"], $currency_names));
    }

}
