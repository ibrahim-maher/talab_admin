
<nav class="sidebar-nav">

    <ul id="sidebarnav">

        <li>
            <a class="waves-effect waves-dark" href="{!! url('dashboard') !!}" aria-expanded="false">

                <i class="mdi mdi-home"></i>

                <span class="hide-menu">{{trans('lang.dashboard')}}</span>

            </a>
        </li>

        <li>
            <a class="waves-effect waves-dark" href="{!! url('users') !!}" aria-expanded="false">

                <i class="mdi mdi-account-multiple"></i>

                <span class="hide-menu">{{trans('lang.user_customer')}}</span>

            </a>
        </li>
        <li>
            <a class="waves-effect waves-dark" href="{!! url('vendors') !!}" aria-expanded="false">

                <i class="mdi mdi-account-multiple"></i>

                <span class="hide-menu">{{trans('lang.owner_vendor')}}</span>

            </a>
        </li>
        <li><a class="waves-effect waves-dark" href="{!! url('restaurants') !!}" aria-expanded="false">

                <i class="mdi mdi-shopping"></i>

                <span class="hide-menu">{{trans('lang.restaurant_plural')}}</span>

            </a>
        </li>

        <li><a class="waves-effect waves-dark" href="{!! url('drivers') !!}" aria-expanded="false">

                <i class="mdi mdi-car"></i>

                <span class="hide-menu">{{trans('lang.driver_plural')}}</span>

            </a>
        </li>


        <li><a class="waves-effect waves-dark" href="{!! url('categories') !!}" aria-expanded="false">

                <i class="mdi mdi-clipboard-text"></i>

                <span class="hide-menu">{{trans('lang.category_plural')}}</span>

            </a>
        </li>


        <li>
            
        <a class="waves-effect waves-dark" href="{!! url('foods') !!}" aria-expanded="false">
                <i class="mdi mdi-food"></i>
                <span class="hide-menu">{{trans('lang.food_plural')}}</span>
            </a>

        </li>

        

        <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                <i class="mdi mdi-plus-box"></i>
                <span class="hide-menu">{{trans('lang.item_attribute_id')}}</span>
            </a>

            <ul aria-expanded="false" class="collapse">

                <li><a href="{!! route('attributes') !!}">{{trans('lang.item_attribute_id')}}</a></li>

                <li><a href="{!! route('reviewattributes') !!}">{{trans('lang.review_attribute_plural')}}</a></li>

            </ul>

        </li>

       <li><a class="waves-effect waves-dark" href="{!! url('orders') !!}" aria-expanded="false">
                <i class="mdi mdi-library-books"></i>
                <span class="hide-menu">{{trans('lang.order_plural')}}</span>
            </a>
        </li>

        


        <li><a class="waves-effect waves-dark" href="{!! url('coupons') !!}" aria-expanded="false">

                <i class="mdi mdi-sale"></i>

                <span class="hide-menu">{{trans('lang.coupon_plural')}}</span>

            </a>
        </li>


        <li><a class="waves-effect waves-dark" href="{!! url('notification') !!}" aria-expanded="false">

                <i class="fa fa-table "></i>

                <span class="hide-menu">{{trans('lang.notification')}}</span>

            </a>
        </li>

   

        <li>
            <a class="waves-effect waves-dark" href="{!! url('banners') !!}" aria-expanded="false">

                <i class="mdi mdi-monitor-multiple "></i>

                <span class="hide-menu">{{trans('lang.menu_items')}}</span>

            </a>
        </li>
        
     

        <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">

                <i class="mdi mdi-settings"></i>

                <span class="hide-menu">{{trans('lang.app_setting')}}</span>

            </a>

            <ul aria-expanded="false" class="collapse">

                <li><a href="{!! url('settings/app/globals') !!}">{{trans('lang.app_setting_globals')}}</a></li>

                <li><a href="{!! url('settings/currencies') !!}">{{trans('lang.currency_plural')}}</a></li>

           

                <li><a href="{!! url('settings/app/radiusConfiguration') !!}">{{trans('lang.radios_configuration')}}</a>
                </li>

              
                <li><a href="{!! url('settings/app/vatSetting') !!}">{{trans('lang.vat_setting')}}</a></li>

                <li><a href="{!! url('settings/app/deliveryCharge') !!}">{{trans('lang.deliveryCharge')}}</a></li>
                
                <li><a href="{!! url('settings/app/specialOffer') !!}">{{trans('lang.special_offer')}}</a></li>
                
            
    

            </ul>

        </li>

    </ul>

    <p class="web_version"></p>
    
</nav>
