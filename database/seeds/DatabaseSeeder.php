<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $group_code_array = [
            '101'=>'Capital & Reserve',

            '102'=>'Deposit',

            //'103'=>'Bills Payable',

            //'104'=>'Adjusting Account Credit',

            '105'=>'Interest Suspense Account',

            '106'=>'Borrowing from Banks',

            '107'=>'Other Liabilities',

            '108'=>'Contra',

            '109'=>'HO Account',

            '110'=>'Income Account',

            '201'=>'Cash & Bank Balance',

            '202'=>'Investment',

            '203'=>'Loans',

            '204'=>'Other Assets',

            '205'=>'Contra',

            '206'=>'HO Account',

            '207'=>'Sundry Assets',


            '208'=>'Expenditure Account',

            '301'=>'Interest Received',

            '302'=>'Head Office Interest Account',

            '303'=>'Rent',

            '304'=>'Income on Investment',

            '305'=>'Other Receipts',

            '306'=>'Computer',


            '401'=>'Interest & Discounts Paid',

            '402'=>'Salary Allowances & Fees',

            '403'=>'Rent Taxes & Insurance',

            '404'=>'Postage Telephone & Stamps',

            '405'=>'Depreciation Repair & Loss',

            '406'=>'Stationary Printing & Publicity',

            '407'=>'Cash Carrying Charges',

            '408'=>'Other Expenses'

        ];

        $gl_code_array = [
            //101
            '10101'=>'Share Capital',
            '10102'=>'Reserve Fund',
            '10103'=>'Reserve for Bad Debt',
            '10104'=>'Other Reserve',
            '10105'=>'Profit & Loss Account',

            //102
            '10201'=>'Current Deposit',
            '10202'=>'Savings Deposit',
            '10203'=>'Fixed Deposit',
            '10204'=>'Deposit Schemes',

            //103
            //'10301'=>'Adjusting',
            //'10206'=>'Share Capital',
            //'10207'=>'Share Capital',
            //'10401'=>'',
            //'10501'=>'';

        ];
        //$faker = Faker::create();
        // $this->call(UsersTableSeeder::class);

        foreach ($group_code_array as $key => $value) {
            DB::table('group_codes')->insert(['group_code'=>$key,'group_title'=>$value]);

        }

    }
}
