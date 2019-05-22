<div class="col s3 m3">    
            <ul class="collapsible">
                @php
                    $menu_array_1 = ['Add Customer Person','Add Customer Business', 'View Customer Person', 'View Customer Business','Chart Of Accounts'];
                    $menu_array_2 = ['Open Savings-General','Open Savings-Staff', 'Open Currnet Account','Open FDR'];
                    $menu_array_3 = ['Open Daily Loan','Open Weekly Loan', 'Open Monthly Loan'];
                    $menu_array_4 = ['Cash Transaction','Transfer Transaction', 'Authorise Transaction'];
                    $menu_array_5 = ['Daily Sheet','Weekly Sheet', 'Monthly Sheet'];
                    $menu_array_6 = ['Issue Cheques', 'Authorize Cheques'];
                    $menu_array_7 = ['Cash Memo','Receive Register', 'Payment Register', 
                                        'Transfer Register','Cash Book', 'Daily Affairs','Cheque Register'];
                    $menu_array_8 = ['Take Backup', 'Restore Backup','Create User','Day End Process'];                    

              

                    $icon_array_1 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];                   
                    $icon_array_2 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];
                    $icon_array_3 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];                   
                    $icon_array_4 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];                   
                    $icon_array_5 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','','']; 
                    $icon_array_6 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];                   
                    $icon_array_7 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];                   
                    $icon_array_8 = ['fa fa-user-circle-o','fa fa-briefcase', 'fa fa-eye','','','',''];                   

                    $url_array_1  = ['add_cust_person_form','add_cust_person_form','view_all_customer_person','add_cust_person_form',
                                     'get_coa_form','add_cust_person_form','add_cust_person_form','add_cust_person_form','add_cust_person_form','add_cust_person_form'];
                    $url_array_2  = ['sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form','sb_acc_form'];
                    $url_array_3  = ['','','','','','','','','',''];
                    $url_array_4  = ['','','','','','','','','',''];
                    $url_array_5  = ['','','','','','','','','',''];
                    $url_array_6  = ['','','','','','','','','',''];
                    $url_array_7  = ['','','','','','','','','',''];
                    $url_array_8  = ['','','','','','','','','',''];


                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Customer',            $menu_array_1, $icon_array_1, $url_array_1); 
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Deposit',             $menu_array_2, $icon_array_1, $url_array_2);    
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Loan',                $menu_array_3, $icon_array_1, $url_array_1);    
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Transaction',         $menu_array_4, $icon_array_1, $url_array_1);    
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Collection Sheet',    $menu_array_5, $icon_array_1, $url_array_1);    
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Cheques',             $menu_array_6, $icon_array_1, $url_array_1);
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('Reports',             $menu_array_7, $icon_array_1, $url_array_1);
                    echo App\Http\Controllers\FrontendHelper::createSideMenu('System Control',      $menu_array_8, $icon_array_1, $url_array_1);    
                @endphp
                
            </ul>    
</div>