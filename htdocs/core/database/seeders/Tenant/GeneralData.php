<?php

namespace Database\Seeders\Tenant;

use App\Helpers\ImageDataSeedingHelper;
use App\Mail\TenantCredentialMail;
use App\Models\Admin;
use App\Models\Language;
use App\Models\Menu;
use App\Models\TopbarInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GeneralData extends Seeder
{
    public function run()
    {
        $this->insertStaticOptionData();
        $this->seed_topbar_info();
        $this->central_data();
    }

    private function insertStaticOptionData()
    {
        DB::statement(/** @lang SQL */ "INSERT INTO `static_options` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
            (1,'site_title','Boutique','2022-08-11 01:14:21','2023-01-02 17:34:09'),
            (3,'site_tag_line','','2022-08-11 01:14:21','2023-01-02 17:34:09'),
            (5,'home_one_header_button_text','Rejoignez-nous!','2022-08-11 01:14:21','2022-08-11 01:14:21'),
            (7,'language_selector_status','on','2022-08-11 01:14:21','2022-08-11 01:14:21'),
            (8,'home_page','1','2022-08-11 01:14:21','2022-08-11 01:14:21'),
            (10,'global_footer_variant','01','2022-08-11 01:14:21','2022-11-10 14:29:08'),
            (11,'order_form','02','2022-08-11 01:14:21','2022-08-11 01:14:21'),
            (12,'site_logo','324','2022-08-11 01:14:21','2022-10-23 07:04:21'),
            (13,'site_white_logo','324','2022-08-11 01:14:21','2022-10-23 07:04:21'),
            (14,'site_favicon','322','2022-08-11 01:14:21','2022-10-17 07:08:08'),
            (15,'site_footer_copyright_text','{copy} {year} Copyright All Right Reserved by AuPanier','2022-08-11 01:45:38','2023-01-02 17:34:09'),
            (17,'dark_mode_for_admin_panel',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:53'),
            (18,'maintenance_mode',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:38'),
            (19,'backend_preloader',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:38'),
            (20,'user_email_verify_status',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:38'),
            (21,'guest_order_system_status',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:38'),
            (22,'timezone','Africa/Tunis','2022-08-11 01:45:38','2022-09-12 00:48:23'),
            (23,'main_color_one_hexfashion','rgb(255, 128, 93)','2022-08-11 02:23:08','2022-11-12 10:18:07'),
            (24,'main_color_two_hexfashion','#ff805d','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (25,'main_color_three_hexfashion','#599a8d','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (26,'main_color_four_hexfashion','#1e88e5','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (27,'secondary_color_hexfashion','#F7A3A8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (28,'secondary_color_two_hexfashion','#ffdcd2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (29,'section_bg_1_hexfashion','#FFFBFB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (30,'section_bg_2_hexfashion','#FFF6EE','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (31,'section_bg_3_hexfashion','#F4F8FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (32,'section_bg_4_hexfashion','#F2F3FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (33,'section_bg_5_hexfashion','#F9F5F2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (34,'section_bg_6_hexfashion','#E5EFF8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (35,'heading_color_hexfashion','#333333','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (36,'body_color_hexfashion','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (37,'light_color_hexfashion','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (38,'extra_light_color_hexfashion','#888888','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (39,'review_color_hexfashion','#FABE50','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (40,'feedback_bg_item_hexfashion','rgb(255, 246, 238)','2022-08-11 02:23:08','2022-11-13 06:14:29'),
            (41,'new_color_hexfashion','#5AB27E','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (42,'main_color_one_furnito','rgb(255, 128, 93)','2022-08-11 02:23:08','2022-11-12 10:18:20'),
            (43,'main_color_two_furnito','rgb(255, 128, 93)','2022-08-11 02:23:08','2022-11-10 14:27:10'),
            (44,'main_color_three_furnito','rgb(89, 154, 141)','2022-08-11 02:23:08','2022-11-10 14:27:10'),
            (45,'main_color_four_furnito','#1e88e5','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (46,'secondary_color_furnito','#F7A3A8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (47,'secondary_color_two_furnito','#ffdcd2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (48,'section_bg_1_furnito','#FFFBFB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (49,'section_bg_2_furnito','rgb(255, 246, 238)','2022-08-11 02:23:08','2022-11-12 07:07:39'),
            (50,'section_bg_3_furnito','#F4F8FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (51,'section_bg_4_furnito','#F2F3FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (52,'section_bg_5_furnito','#F9F5F2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (53,'section_bg_6_furnito','#E5EFF8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (54,'heading_color_furnito','#333333','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (55,'body_color_furnito','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (56,'light_color_furnito','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (57,'extra_light_color_furnito','#888888','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (58,'review_color_furnito','#FABE50','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (59,'feedback_bg_item_furnito','rgb(255, 246, 238)','2022-08-11 02:23:08','2022-11-13 06:14:29'),
            (60,'new_color_furnito','#5AB27E','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (61,'main_color_one_medicom','rgb(30, 136, 229)','2022-08-11 02:23:08','2023-03-05 18:06:03'),
            (62,'main_color_two_medicom','rgb(30, 136, 229)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
            (63,'main_color_three_medicom','rgb(30, 136, 229)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
            (64,'main_color_four_medicom','#1e88e5','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (65,'secondary_color_medicom','#F7A3A8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (66,'secondary_color_two_medicom','#ffdcd2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (67,'section_bg_1_medicom','#FFFBFB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (68,'section_bg_2_medicom','rgb(255, 246, 238)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
            (69,'section_bg_3_medicom','#F4F8FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (70,'section_bg_4_medicom','rgb(244, 248, 251)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
            (71,'section_bg_5_medicom','#F9F5F2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (72,'section_bg_6_medicom','#E5EFF8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (73,'heading_color_medicom','#333333','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (74,'body_color_medicom','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (75,'light_color_medicom','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (76,'extra_light_color_medicom','#888888','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (77,'review_color_medicom','#FABE50','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (78,'feedback_bg_item_medicom','rgb(229, 239, 248)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
            (79,'new_color_medicom','#5AB27E','2022-08-11 02:23:08','2022-08-11 02:23:08'),
            (80,'body_font_family_hexfashion','Jost','2022-08-11 04:43:05','2022-11-20 12:55:32'),
            (81,'heading_font_family_hexfashion','Jost','2022-08-11 04:43:05','2022-11-20 12:55:32'),
            (82,'heading_font_hexfashion','on','2022-08-11 04:43:05','2022-08-11 05:24:53'),
            (83,'body_font_family_furnito','Jost','2022-08-11 04:43:05','2022-11-21 17:41:48'),
            (84,'heading_font_family_furnito','Jost','2022-08-11 04:43:05','2022-11-21 17:41:48'),
            (85,'heading_font_furnito','on','2022-08-11 04:43:05','2022-11-21 17:41:48'),
            (86,'body_font_family_medicom','Manrope','2022-08-11 04:43:05','2023-03-05 18:04:58'),
            (87,'heading_font_family_medicom','Roboto Slab','2022-08-11 04:43:05','2023-03-05 18:04:35'),
            (88,'heading_font_medicom','on','2022-08-11 04:43:05','2022-08-11 05:26:34'),
            (89,'body_font_variant_hexfashion','a:8:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
            (90,'heading_font_variant_hexfashion','a:16:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";i:8;s:5:\"1,200\";i:9;s:5:\"1,300\";i:10;s:5:\"1,400\";i:11;s:5:\"1,500\";i:12;s:5:\"1,600\";i:13;s:5:\"1,700\";i:14;s:5:\"1,800\";i:15;s:5:\"1,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
            (91,'body_font_variant_furnito','a:8:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
            (92,'heading_font_variant_furnito','a:8:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
            (93,'body_font_variant_medicom','a:7:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";}','2022-08-11 04:43:05','2023-03-05 18:04:58'),
	        (94,'heading_font_variant_medicom','a:8:{i:0;s:5:\"0,100\";i:1;s:5:\"0,200\";i:2;s:5:\"0,300\";i:3;s:5:\"0,400\";i:4;s:5:\"0,500\";i:5;s:5:\"0,600\";i:6;s:5:\"0,700\";i:7;s:5:\"0,800\";}','2022-08-11 04:43:05','2023-03-05 18:04:35'),
            (95,'category_page_item_show','9','2022-08-17 00:22:46','2022-08-22 00:53:40'),
            (96,'tag_page_item_show','9','2022-08-17 00:22:46','2022-08-22 00:53:40'),
            (97,'search_page_item_show','9','2022-08-17 00:22:46','2022-08-22 00:53:40'),
            (98,'blog_avater_image','52','2022-08-17 00:22:46','2022-08-17 00:22:46'),
            (99,'pricing_plan',NULL,'2022-08-21 23:33:07','2022-08-22 00:08:33'),
            (100,'blog_page','5','2022-08-21 23:33:07','2022-11-16 05:14:54'),
            (101,'blogs_page_item_show','9','2022-08-22 00:53:40','2022-08-22 00:53:40'),
            (102,'site_global_currency','TND','2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (103,'site_global_payment_gateway',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (104,'site_usd_to_ngn_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (105,'site_euro_to_ngn_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (106,'site_currency_symbol_position','right','2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (107,'site_default_payment_gateway','Manual Payment','2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (108,'site__to_idr_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (109,'site__to_inr_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (110,'site__to_ngn_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (111,'site__to_zar_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (112,'site__to_brl_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
            (113,'shop_page','4','2022-09-12 12:31:06','2022-11-16 05:14:54'),
            (114,'site_usd_to_idr_exchange_rate',NULL,'2022-10-12 05:57:47','2022-10-12 05:57:47'),
            (115,'site_usd_to_inr_exchange_rate',NULL,'2022-10-12 05:57:47','2022-10-12 05:57:47'),
            (116,'site_usd_to_zar_exchange_rate',NULL,'2022-10-12 05:57:47','2022-10-12 05:57:47'),
            (117,'site_usd_to_brl_exchange_rate',NULL,'2022-10-12 05:57:47','2022-10-12 05:57:47'),
            (119, 'site_order_success_page_en_US_title', 'Commande passée avec succès', '2022-10-26 12:45:18', '2022-10-26 12:45:18'),
            (120, 'site_order_success_page_en_US_description', 'Merci d\'avoir passé commande chez nous. Vos articles seront bientôt en route !', '2022-10-26 12:45:18', '2022-10-26 12:45:18'),
            (121, 'site_order_success_page_ar_title', NULL, '2022-10-26 12:45:18', '2022-10-26 12:45:18'),
            (122, 'site_order_success_page_ar_description', NULL, '2022-10-26 12:45:18', '2022-10-26 12:45:18'),
            (123, 'site_order_cancel_page_en_US_title', 'Annulation de commande', '2022-10-26 12:47:05', '2022-10-26 12:53:43'),
            (124, 'site_order_cancel_page_en_US_subtitle', 'Votre commande a été annulée.', '2022-10-26 12:47:05', '2022-10-27 04:58:45'),
            (125, 'site_order_cancel_page_en_US_description', 'Nous sommes désolés de vous voir partir. Si vous changez d\'avis, n\'hésitez pas à passer une nouvelle commande.', '2022-10-26 12:47:05', '2022-10-27 04:58:45'),
            (126, 'site_order_cancel_page_ar_title', NULL, '2022-10-26 12:47:05', '2022-10-26 12:47:05'),
            (127, 'site_order_cancel_page_ar_subtitle', NULL, '2022-10-26 12:47:05', '2022-10-26 12:47:05'),
            (128, 'site_order_cancel_page_ar_description', NULL, '2022-10-26 12:47:05', '2022-10-26 12:47:05'),
            (130,'order_receiving_email','admin@gmail.com','2022-10-27 07:20:10','2022-10-27 07:20:10'),
            (131,'tenant_site_global_email','contact@aupanier.tn','2022-10-27 07:20:22','2022-10-27 07:20:22'),
            (132,'stock_threshold_amount','5','2022-10-31 12:37:04','2022-10-31 13:37:03'),
            (133,'stock_warning_message','Following products stock are running low:','2022-11-01 06:31:26','2022-11-01 06:32:18'),
            (134,'track_order','7','2023-01-02 17:33:01','2023-01-02 17:33:01'),
            (135,'breadcrumb_bg_hexfashion','rgb(255, 246, 238)','2023-01-02 17:34:20','2023-01-02 17:45:51'),
            (136,'breadcrumb_bg_furnito','#E5EFF8','2023-01-02 17:34:20','2023-01-02 17:34:20'),
            (137,'breadcrumb_bg_medicom','#E5EFF8','2023-01-02 17:34:20','2023-01-02 17:34:20'),
            (138,'blog_avatar_image','343','2023-01-03 17:51:46','2023-01-03 17:51:57')");
    }

    private function seed_topbar_info()
    {
        DB::statement("INSERT INTO `topbar_infos` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
        (1, 'lab la-twitter', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21'),
        (2, 'lab la-pinterest-p', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21'),
        (3, 'las la-user', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21'),
        (4, 'lab la-facebook-f', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21')");
    }

    private function central_data()
    {
        update_static_option_central('get_script_version', '1.0.3');
    }
}
