<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationSeeder extends Seeder
{
    public function run(): void
    {
        $translations = [

            // ── GENERAL ─────────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'company_name',
                'value_en' => 'Fathima Building Materials Trading Co. LLC',
                'value_ar' => 'فاطمة لتجارة مواد البناء ذ.م.م.'],

            ['group' => 'general', 'key' => 'company_location',
                'value_en' => 'Behind Madinah Super Market Gurfa Street, Fujairah, UAE',
                'value_ar' => 'خلف سوبر ماركت المدينة ، شارع الغرفة ، الفجيرة ،أ.ع.م'],

            ['group' => 'general', 'key' => 'welcome',
                'value_en' => 'Welcome To Fathima Building Materials Trading Co. LLC',
                'value_ar' => 'مرحبا بكم في فاطمة لتجارة مواد البناء ذ.م.م.'],

            ['group' => 'general', 'key' => 'mail_us',
                'value_en' => 'Mail Us',
                'value_ar' => 'البريد الالكترونية'],

            ['group' => 'general', 'key' => 'call_us',
                'value_en' => 'Call Us',
                'value_ar' => 'الاتصال'],

            ['group' => 'general', 'key' => 'read_more',
                'value_en' => 'Read More',
                'value_ar' => 'قراءة المزيد'],

            ['group' => 'general', 'key' => 'copyright',
                'value_en' => 'Fathima Building Materials Trading Co. LLC | All Rights Reserved | Design by',
                'value_ar' => 'شركة فاطمة لتجارة مواد البناء ذ.م.م.| جميع الحقوق محفوظة | تصميم'],

            // ── NAV ─────────────────────────────────────────────────────────
            ['group' => 'nav', 'key' => 'nav_home',
                'value_en' => 'Home',
                'value_ar' => 'الرئيسية'],

            ['group' => 'nav', 'key' => 'nav_about',
                'value_en' => 'About Us',
                'value_ar' => 'معلوماتنا'],

            ['group' => 'nav', 'key' => 'nav_products',
                'value_en' => 'Products',
                'value_ar' => 'المنتجات'],

            ['group' => 'nav', 'key' => 'nav_gallery',
                'value_en' => 'Gallery',
                'value_ar' => 'المعرض'],

            ['group' => 'nav', 'key' => 'nav_contact',
                'value_en' => 'Contact Us',
                'value_ar' => 'اتصل بنا'],

            ['group' => 'nav', 'key' => 'enq_btn',
                'value_en' => 'Enquiry',
                'value_ar' => 'الاستفسار'],

            // ── SLIDER ──────────────────────────────────────────────────────
            ['group' => 'slider', 'key' => 'slider_head',
                'value_en' => 'Strong Customer Service And Support Is Our Mission!',
                'value_ar' => 'خدمة العملاء القوية والدعم هو مهمتنا !'],

            ['group' => 'slider', 'key' => 'slider_head2',
                'value_en' => 'Dedicated and committed supplier in the industry!',
                'value_ar' => 'مورد مخصص وملتزم في الصناعة !'],

            // ── ABOUT ───────────────────────────────────────────────────────
            ['group' => 'about', 'key' => 'about_h1',
                'value_en' => 'FATHIMA BUILDING MATERIALS TRADING',
                'value_ar' => 'فاطمة لتجارة مواد البناء'],

            ['group' => 'about', 'key' => 'about_c1',
                'value_en' => 'We are importers and stockiest of wide range of Hardware, Building Materials & Safety items. We specialization is Hand tools and Power tools, we also deal in Machine tools, Pneumatic tools & its accessories and consumables. From a time in UAE, our company successfully acquired a highly satisfied number of customers, as we offer not only the best products and a friendly service but our prices are also very competitive. With experience, we are able to pay attention to product quality and cost control and hence we assure our products to have excellent performance and price. Best Services, quality products and customer satisfation are the ultimate goals of our company.',
                'value_ar' => 'نحن مستوردون ومخزونون لمجموعة واسعة من الأجهزة ومواد البناء وعناصر السلامة. نحن متخصصون في الأدوات اليدوية والأدوات الكهربائية ، كما نتعامل في الأدوات الآلية والأدوات الهوائية وملحقاتها والمواد الاستهلاكية. منذ فترة في الإمارات العربية المتحدة ، نجحت شركتنا في الحصول على عدد كبير من العملاء الراضين ، حيث أننا لا نقدم فقط أفضل المنتجات والخدمة الودية ولكن أسعارنا تنافسية للغاية أيضًا. من خلال الخبرة ، نحن قادرون على الاهتمام بجودة المنتج والتحكم في التكاليف ، وبالتالي نؤكد أن منتجاتنا تتمتع بأداء وسعر ممتازين. أفضل الخدمات والمنتجات عالية الجودة وإرضاء العملاء هي الأهداف النهائية لشركتنا.'],

            ['group' => 'about', 'key' => 'about_h2',
                'value_en' => 'OUR VISION',
                'value_ar' => 'رؤيتنا'],

            ['group' => 'about', 'key' => 'about_c2',
                'value_en' => 'FATHIMA BMT endeavors to become the number one supplier of top quality products with a focus on prompt deliveries and personalized service. We aim to reach this position by anticipating and meeting requirements, while keeping pace with star advances and confirming to high quality standards.',
                'value_ar' => 'تسعى FATHIMA BMT إلى أن تصبح المورد الأول للمنتجات عالية الجودة مع التركيز على التسليم الفوري والخدمة الشخصية. نحن نهدف إلى الوصول إلى هذا المنصب من خلال توقع المتطلبات وتلبية المتطلبات ، مع مواكبة تقدم النجوم والتأكيد على معايير الجودة العالية.'],

            ['group' => 'about', 'key' => 'about_h3',
                'value_en' => 'OUR STRATEGY',
                'value_ar' => 'استراتيجيتنا'],

            ['group' => 'about', 'key' => 'about_c3',
                'value_en' => 'We work to establish strong, long term relationships with our valued clients, while continuous efforts to offer them the highest level of service. FATHIMA BMT reputation for quality and standards has attracted a number of clients across the UAE, We aim to expand our company in GCC too.',
                'value_ar' => 'نعمل على إقامة علاقات قوية وطويلة الأمد مع عملائنا الكرام ، مع بذل جهود متواصلة لتقديم أعلى مستوى من الخدمة لهم. جذبت سمعة FATHIMA BMT للجودة والمعايير عددًا من العملاء في جميع أنحاء الإمارات العربية المتحدة ، ونحن نهدف إلى توسيع شركتنا في دول مجلس التعاون الخليجي أيضًا.'],

            ['group' => 'about', 'key' => 'about_h4',
                'value_en' => 'Why Fathima BMT ?',
                'value_ar' => 'لماذا Fathima BMT ؟'],

            ['group' => 'about', 'key' => 'about_c4_1',
                'value_en' => 'We have distribution channels in Oman, UAE, Qatar, India, Kuwait, KSA supplying steel from various geographical stockyards.',
                'value_ar' => 'لدينا قنوات توزيع في عُمان والإمارات وقطر والهند والكويت والمملكة العربية السعودية لتوريد الفولاذ من مستودعات جغرافية مختلفة.'],

            ['group' => 'about', 'key' => 'about_c4_2',
                'value_en' => 'We receive quality mill support, enabling us to supply fully certified steel products at the most comprehensive prices. Our commitment to technological innovation and exacting customer service standards, backed by our 30 years of experience, knowledge and expertise, enable us to add value at every stage of a project.',
                'value_ar' => 'نتلقى دعمًا عالي الجودة للمصنع ، مما يمكننا من توفير منتجات فولاذية معتمدة بالكامل وبأسعار شاملة. إن التزامنا بالابتكار التكنولوجي ومعايير خدمة العملاء الصارمة ، مدعومًا بخبرتنا ومعرفتنا وخبراتنا التي امتدت 30 عامًا ، يمكننا من إضافة قيمة في كل مرحلة من مراحل المشروع.'],

            ['group' => 'about', 'key' => 'about_c4_3',
                'value_en' => 'We are focusing our efforts for future growth on the emerging economies.',
                'value_ar' => 'نحن نركز جهودنا للنمو المستقبلي على الاقتصادات الناشئة.'],

            ['group' => 'about', 'key' => 'about_c4_4',
                'value_en' => 'We successfully cater for the needs of the oil and gas and the construction industry since 1986. At DBMT, we stock long & flat steel products, galvanized iron and aluminium sheets.',
                'value_ar' => 'نجحنا في تلبية احتياجات النفط والغاز وصناعة البناء منذ عام 1986. في DBMT ، نقوم بتخزين منتجات الصلب الطويلة والمسطحة والحديد المجلفن وألواح الألمنيوم.'],

            // ── FOOTER ──────────────────────────────────────────────────────
            ['group' => 'footer', 'key' => 'footer_title',
                'value_en' => 'Leading Structural Steel Distributor in UAE',
                'value_ar' => 'الموزع الرائد للصلب الإنشائي في الإمارات العربية المتحدة'],

            // ── BRANDS ──────────────────────────────────────────────────────
            ['group' => 'brands', 'key' => 'our_brands',
                'value_en' => 'Our Brands',
                'value_ar' => 'علاماتنا التجارية'],

            // ── FORM ────────────────────────────────────────────────────────
            ['group' => 'form', 'key' => 'get_in_touch',
                'value_en' => 'Get in Touch With Us',
                'value_ar' => 'ابق على تواصل معنا'],

            ['group' => 'form', 'key' => 'business_enq',
                'value_en' => 'Business Enquiry',
                'value_ar' => 'استفسار عن الأعمال'],

            ['group' => 'form', 'key' => 'submit',
                'value_en' => 'Submit',
                'value_ar' => 'ارسال'],

            ['group' => 'form', 'key' => 'name_holder',
                'value_en' => 'Name',
                'value_ar' => 'الاسم'],

            ['group' => 'form', 'key' => 'email_holder',
                'value_en' => 'Email Address',
                'value_ar' => 'البريد الالكترونية'],

            ['group' => 'form', 'key' => 'phone_holder',
                'value_en' => 'Phone Number',
                'value_ar' => 'رقم الهاتف'],

            ['group' => 'form', 'key' => 'subject_holder',
                'value_en' => 'Subject',
                'value_ar' => 'الموضوع'],

            ['group' => 'form', 'key' => 'message_holder',
                'value_en' => 'Message',
                'value_ar' => 'الرسالة'],
        ];

        foreach ($translations as $t) {
            DB::table('translations')->updateOrInsert(
                ['group' => $t['group'], 'key' => $t['key']],
                ['value_en' => $t['value_en'], 'value_ar' => $t['value_ar'], 'updated_at' => now(), 'created_at' => now()]
            );
        }
    }
}
