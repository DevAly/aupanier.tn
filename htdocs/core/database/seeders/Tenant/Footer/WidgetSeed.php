<?php

namespace Database\Seeders\Tenant\Footer;

use App\Helpers\ImageDataSeedingHelper;
use App\Models\PageBuilder;
use App\Models\Widgets;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class WidgetSeed extends Seeder
{
    public function run()
    {
		/*   $phone = tenancy()->central(function ($tenant) {
            return $tenant->mobile;
        });
        DB::statement("INSERT INTO `widgets` (`id`, `widget_area`, `widget_order`, `widget_location`, `widget_name`, `widget_content`, `created_at`, `updated_at`, `widget_namespace`) VALUES
        (8,NULL,3,'footer','FooterContact','a:8:{s:2:\"id\";s:1:\"8\";s:11:\"widget_name\";s:13:\"FooterContact\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:60:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterContact\";s:5:\"title\";s:10:\"Contact Us\";s:23:\"footer_contact_repeater\";a:2:{s:11:\"field_type_\";a:2:{i:0;s:5:\"email\";i:1;s:6:\"number\";}s:12:\"field_value_\";a:2:{i:0;s:19:\"misujom01@gmail.com\";i:1;s:11:\"02083483945\";}}}','2022-09-11 05:48:46','2022-09-11 06:53:20','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterContact'),
        (9,NULL,1,'footer','SocialFollowWidget','a:7:{s:11:\"widget_name\";s:18:\"SocialFollowWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:65:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\SocialFollowWidget\";s:5:\"title\";s:9:\"Follow Us\";s:20:\"footer_social_follow\";a:2:{s:14:\"repeater_icon_\";a:4:{i:0;s:17:\"lab la-facebook-f\";i:1;s:14:\"lab la-twitter\";i:2;s:16:\"lab la-instagram\";i:3;s:14:\"lab la-youtube\";}s:18:\"repeater_icon_url_\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-09-11 06:53:14','2022-09-11 06:53:14','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\SocialFollowWidget'),
        (10,NULL,2,'footer','FooterAbout','a:8:{s:2:\"id\";s:2:\"10\";s:11:\"widget_name\";s:11:\"FooterAbout\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"2\";s:9:\"namespace\";s:58:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterAbout\";s:5:\"image\";s:3:\"324\";s:11:\"description\";s:153:\"There’s a voice that keeps on calling me. Down the road, that’s where I’ll always be. Every stop I make, I make a new friend. Can’t stay for long\";}','2022-09-11 06:53:34','2023-01-03 17:36:21','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterAbout'),
        (11,NULL,1,'footer_bottom','FooterBottomLinksWidget','a:7:{s:2:\"id\";s:2:\"11\";s:11:\"widget_name\";s:23:\"FooterBottomLinksWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:13:\"footer_bottom\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:70:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterBottomLinksWidget\";s:11:\"navbar_link\";s:1:\"1\";}','2022-09-11 07:09:24','2022-09-11 07:51:08','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterBottomLinksWidget'),
        (12,NULL,1,'footer_bottom_left','FooterBottomLinksWidget','a:7:{s:2:\"id\";s:2:\"12\";s:11:\"widget_name\";s:23:\"FooterBottomLinksWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:18:\"footer_bottom_left\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:70:\"Plugins\\\\WidgetBuilder\\\\Widgets\\\\Tenants\\\\ThemeOne\\\FooterBottomLinksWidget\";s:11:\"navbar_link\";s:1:\"1\";}','2022-09-11 23:50:37','2022-09-11 23:52:44','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterBottomLinksWidget'),
        (13,NULL,1,'footer_bottom_right','FooterPaymentGatewaysWidget','a:7:{s:2:\"id\";s:2:\"13\";s:11:\"widget_name\";s:27:\"FooterPaymentGatewaysWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:19:\"footer_bottom_right\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:74:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterPaymentGatewaysWidget\";s:22:\"footer_payment_gateway\";a:2:{s:15:\"repeater_image_\";a:1:{i:0;s:3:\"448\";}s:19:\"repeater_image_url_\";a:1:{i:0;s:1:\"#\";}}}','2022-09-12 00:29:45','2023-01-03 17:27:21','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterPaymentGatewaysWidget'),
        (14,NULL,1,'shop_footer','ShopFooterWidget','a:7:{s:2:\"id\";s:2:\"14\";s:11:\"widget_name\";s:16:\"ShopFooterWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:11:\"shop_footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:46:\"Plugins\\\WidgetBuilder\\\Widgets\\\ShopFooterWidget\";s:17:\"services_repeater\";a:3:{s:14:\"repeater_icon_\";a:4:{i:0;s:12:\"las la-truck\";i:1;s:15:\"las la-redo-alt\";i:2;s:11:\"las la-lock\";i:3;s:11:\"las la-gift\";}s:15:\"repeater_title_\";a:4:{i:0;s:13:\"Free Shipping\";i:1;s:11:\"Easy Return\";i:2;s:14:\"Secure payment\";i:3;s:10:\"Best Offer\";}s:18:\"repeater_subtitle_\";a:4:{i:0;s:14:\"Order Over $90\";i:1;s:14:\"Within 15 Days\";i:2;s:15:\"Online Shopping\";i:3;s:10:\"Guaranteed\";}}}','2022-11-24 19:35:55','2022-11-28 17:19:46','Plugins\\\WidgetBuilder\\\Widgets\\\ShopFooterWidget');
		");*/
   $phone = tenancy()->central(function ($tenant) {
            return $tenant->user->mobile;
        });

        $email = tenancy()->central(function ($tenant) {
            Log::info('rayen:'.get_class($tenant).json_encode($tenant).json_encode($tenant->attributes));
            return $tenant->user->email;
        });
        

        $query = "INSERT INTO `widgets` (`id`, `widget_area`, `widget_order`, `widget_location`, `widget_name`, `widget_content`, `created_at`, `updated_at`, `widget_namespace`) VALUES
        (8,NULL,3,'footer','FooterContact','a:8:{s:2:\"id\";s:1:\"8\";s:11:\"widget_name\";s:13:\"FooterContact\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:60:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterContact\";s:5:\"title\";s:10:\"Contact Us\";s:23:\"footer_contact_repeater\";a:2:{s:11:\"field_type_\";a:2:{i:0;s:5:\"email\";i:1;s:6:\"number\";}s:12:\"field_value_\";a:2:{i:0;s:%d:\"%s\";i:1;s:%d:\"%s\";}}}','2022-09-11 05:48:46','2022-09-11 06:53:20','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterContact'),
		(9,NULL,1,'footer','SocialFollowWidget','a:7:{s:11:\"widget_name\";s:18:\"SocialFollowWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:65:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\SocialFollowWidget\";s:5:\"title\";s:9:\"Follow Us\";s:20:\"footer_social_follow\";a:2:{s:14:\"repeater_icon_\";a:4:{i:0;s:17:\"lab la-facebook-f\";i:1;s:14:\"lab la-twitter\";i:2;s:16:\"lab la-instagram\";i:3;s:14:\"lab la-youtube\";}s:18:\"repeater_icon_url_\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-09-11 06:53:14','2022-09-11 06:53:14','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\SocialFollowWidget'),
        (10,NULL,2,'footer','FooterAbout','a:8:{s:2:\"id\";s:2:\"10\";s:11:\"widget_name\";s:11:\"FooterAbout\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"2\";s:9:\"namespace\";s:58:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterAbout\";s:5:\"image\";s:3:\"324\";s:11:\"description\";s:153:\"There’s a voice that keeps on calling me. Down the road, that’s where I’ll always be. Every stop I make, I make a new friend. Can’t stay for long\";}','2022-09-11 06:53:34','2023-01-03 17:36:21','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterAbout'),
        (11,NULL,1,'footer_bottom','FooterBottomLinksWidget','a:7:{s:2:\"id\";s:2:\"11\";s:11:\"widget_name\";s:23:\"FooterBottomLinksWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:13:\"footer_bottom\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:70:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterBottomLinksWidget\";s:11:\"navbar_link\";s:1:\"1\";}','2022-09-11 07:09:24','2022-09-11 07:51:08','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterBottomLinksWidget'),
        (12,NULL,1,'footer_bottom_left','FooterBottomLinksWidget','a:7:{s:2:\"id\";s:2:\"12\";s:11:\"widget_name\";s:23:\"FooterBottomLinksWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:18:\"footer_bottom_left\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:70:\"Plugins\\\\WidgetBuilder\\\\Widgets\\\\Tenants\\\\ThemeOne\\\FooterBottomLinksWidget\";s:11:\"navbar_link\";s:1:\"1\";}','2022-09-11 23:50:37','2022-09-11 23:52:44','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterBottomLinksWidget'),
        (13,NULL,1,'footer_bottom_right','FooterPaymentGatewaysWidget','a:7:{s:2:\"id\";s:2:\"13\";s:11:\"widget_name\";s:27:\"FooterPaymentGatewaysWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:19:\"footer_bottom_right\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:74:\"Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterPaymentGatewaysWidget\";s:22:\"footer_payment_gateway\";a:2:{s:15:\"repeater_image_\";a:1:{i:0;s:3:\"448\";}s:19:\"repeater_image_url_\";a:1:{i:0;s:1:\"#\";}}}','2022-09-12 00:29:45','2023-01-03 17:27:21','Plugins\\\WidgetBuilder\\\Widgets\\\Tenants\\\ThemeOne\\\FooterPaymentGatewaysWidget'),
        (14,NULL,1,'shop_footer','ShopFooterWidget','a:7:{s:2:\"id\";s:2:\"14\";s:11:\"widget_name\";s:16:\"ShopFooterWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:11:\"shop_footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:46:\"Plugins\\\WidgetBuilder\\\Widgets\\\ShopFooterWidget\";s:17:\"services_repeater\";a:3:{s:14:\"repeater_icon_\";a:4:{i:0;s:12:\"las la-truck\";i:1;s:15:\"las la-redo-alt\";i:2;s:11:\"las la-lock\";i:3;s:11:\"las la-gift\";}s:15:\"repeater_title_\";a:4:{i:0;s:13:\"Free Shipping\";i:1;s:11:\"Easy Return\";i:2;s:14:\"Secure payment\";i:3;s:10:\"Best Offer\";}s:18:\"repeater_subtitle_\";a:4:{i:0;s:14:\"Order Over $90\";i:1;s:14:\"Within 15 Days\";i:2;s:15:\"Online Shopping\";i:3;s:10:\"Guaranteed\";}}}','2022-11-24 19:35:55','2022-11-28 17:19:46','Plugins\\\WidgetBuilder\\\Widgets\\\ShopFooterWidget');
		";

        $formattedQuery = sprintf($query, strlen($email), $email, strlen($phone), $phone);

        DB::statement($formattedQuery);  
  }
}
