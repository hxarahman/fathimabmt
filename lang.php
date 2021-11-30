<?php 


$css = '<link rel="stylesheet" href="css/style.css">';

if($_COOKIE['Language'] == "Arabic"){
  $opp_lang = "English";
  $welcome = "مرحبا بكم في فاطمة لتجارة مواد البناء ذ.م.م.";
  $company_name = "فاطمة لتجارة مواد البناء ذ.م.م.";
  $company_location = "خلف سوبر ماركت المدينة ، شارع الغرفة ، الفجيرة ،أ.ع.م";
  $mail_us = "البريد الالكترونية";
  $call_us = "الاتصال";
  $our_brands = "علاماتنا التجارية";
  $enq_btn = "الاستفسار";
  $nav_home = "الرئيسية";
  $nav_aboutUs = "معلوماتنا";
  $nav_products = "المنتجات";
  $nav_gallery = "المعرض";
  $nav_contactUs = "اتصل بنا";
  $footer_title = "الموزع الرائد للصلب الإنشائي في الإمارات العربية المتحدة";
  $submit = "ارسال";
  $business_enq = "استفسار عن الأعمال";
  $copyright = "شركة فاطمة لتجارة مواد البناء ذ.م.م.| جميع الحقوق محفوظة | تصميم";
  $read_more = "قراءة المزيد";
  #about us
  $about_h1 = "فاطمة لتجارة مواد البناء";
  $about_c1 = "نحن مستوردون ومخزونون لمجموعة واسعة من الأجهزة ومواد البناء وعناصر السلامة. نحن متخصصون في الأدوات اليدوية والأدوات الكهربائية ، كما نتعامل في الأدوات الآلية والأدوات الهوائية وملحقاتها والمواد الاستهلاكية. منذ فترة في الإمارات العربية المتحدة ، نجحت شركتنا في الحصول على عدد كبير من العملاء الراضين ، حيث أننا لا نقدم فقط أفضل المنتجات والخدمة الودية ولكن أسعارنا تنافسية للغاية أيضًا. من خلال الخبرة ، نحن قادرون على الاهتمام بجودة المنتج والتحكم في التكاليف ، وبالتالي نؤكد أن منتجاتنا تتمتع بأداء وسعر ممتازين. أفضل الخدمات والمنتجات عالية الجودة وإرضاء العملاء هي الأهداف النهائية لشركتنا.";
  
  $about_h2 = "رؤيتنا";
  $about_c2 = "تسعى FATHIMA BMT إلى أن تصبح المورد الأول للمنتجات عالية الجودة مع التركيز على التسليم الفوري والخدمة الشخصية. نحن نهدف إلى الوصول إلى هذا المنصب من خلال توقع المتطلبات وتلبية المتطلبات ، مع مواكبة تقدم النجوم والتأكيد على معايير الجودة العالية.";
  
  $about_h3 = "استراتيجيتنا";
  $about_c3 = "نعمل على إقامة علاقات قوية وطويلة الأمد مع عملائنا الكرام ، مع بذل جهود متواصلة لتقديم أعلى مستوى من الخدمة لهم. جذبت سمعة FATHIMA BMT للجودة والمعايير عددًا من العملاء في جميع أنحاء الإمارات العربية المتحدة ، ونحن نهدف إلى توسيع شركتنا في دول مجلس التعاون الخليجي أيضًا.";

  $about_h4 = "لماذا Fathima BMT ؟";
  $about_c4_1 = "لدينا قنوات توزيع في عُمان والإمارات وقطر والهند والكويت والمملكة العربية السعودية لتوريد الفولاذ من مستودعات جغرافية مختلفة.";
  $about_c4_2 = "نتلقى دعمًا عالي الجودة للمصنع ، مما يمكننا من توفير منتجات فولاذية معتمدة بالكامل وبأسعار شاملة. إن التزامنا بالابتكار التكنولوجي ومعايير خدمة العملاء الصارمة ، مدعومًا بخبرتنا ومعرفتنا وخبراتنا التي امتدت 30 عامًا ، يمكننا من إضافة قيمة في كل مرحلة من مراحل المشروع.";
  $about_c4_3 = "نحن نركز جهودنا للنمو المستقبلي على الاقتصادات الناشئة.";
  $about_c4_4 = "نجحنا في تلبية احتياجات النفط والغاز وصناعة البناء منذ عام 1986. في DBMT ، نقوم بتخزين منتجات الصلب الطويلة والمسطحة والحديد المجلفن وألواح الألمنيوم.";

  #Big Slider
  $slider_head = "خدمة العملاء القوية والدعم هو مهمتنا !";
  $slider_head2 = "مورد مخصص وملتزم في الصناعة !";
  #inputs
  $name_holder = "الاسم";
  $email_holder = "البريد الالكترونية";
  $phone_holder = "رقم الهاتف";
  $subject_holder = "الموضوع";
  $message_holder = "الرسالة";
  $get_in_touch = "ابق على تواصل معنا";
}else{
  $opp_lang = "Arabic";
  $welcome = "Welcome To Fathima Building Materials Trading Co. LLC";
  $company_name = "Fathima Building Materials Trading Co. LLC";
  $company_location = "Behind Madinah Super Market Gurfa Street, Fujairah, UAE";
  $mail_us = "Mail Us";
  $call_us = "Call Us";
  $our_brands = "Our Brands";
  $enq_btn = "Enquiry";
  $nav_home = "Home";
  $nav_aboutUs = "About Us";
  $nav_products = "Products";
  $nav_gallery = "Gallery";
  $nav_contactUs = "Contact Us";
  $footer_title = "Leading Structural Steel Distributor in UAE";
  $submit = "submit";
  $business_enq = "Business Enquiry";
  $copyright = "Fathima Building Materials Trading Co. LLC | All Rights Reserved | Design by";
  $read_more = "Read More";
  #about us
  $about_h1 = "FATHIMA BUILDING MATERIALS TRADING";
  $about_c1 = "We are importers and stockiest of wide range of Hardware, Building Materials & Safety items. We specialization is Hand tools and Power tools, we also deal in Machine tools, Pneumatic tools & its accessories and consumables. From a time in UAE, our company successfully acquired a highly satisfied number of customers, as we offer not only the best products and a friendly service but our prices are also very competitive. With experience, we are able to pay attention to product quality and cost control and hence we assure our products to have excellent performance and price. Best Services, quality products and customer satisfation are the ultimate goals of our company.";
  
  $about_h2 = "OUR VISION";
  $about_c2 = "FATHIMA BMT endeavors to become the number one supplier of top quality products with a focus on prompt deliveries and personalized service. We aim to reach this position by anticipating and meeting requirements, while keeping pace with star advances and confirming to high quality standards.";
  
  $about_h3 = "OUR STRATEGY";
  $about_c3 = "We work to establish strong, long term relationships with our valued clients, while continuous efforts to offer them the highest level of service. FATHIMA BMT reputation for quality and standards has attracted a number of clients across the UAE, We aim to expand our company in GCC too.";
  
  $about_h4 = "Why Fathima BMT ?";
  $about_c4_1 = "We have distribution channels in Oman, UAE, Qatar, India, Kuwait, KSA supplying steel from various geographical stockyards.";
  $about_c4_2 = "We receive quality mill support, enabling us to supply fully certified steel products at the most comprehensive prices. Our commitment to technological innovation and exacting customer service standards, backed by our 30 years of experience, knowledge and expertise, enable us to add value at every stage of a project.";
  $about_c4_3 = "We are focusing our efforts for future growth on the emerging economies.";
  $about_c4_4 = "We successfully cater for the needs of the oil and gas and the construction industry since 1986. At DBMT, we stock long & flat steel products, galvanized iron and aluminium sheets.";
  #Big Slider
  $slider_head = "Strong Customer Service And Support Is Our Mission!";
  $slider_head2 = "Dedicated and committed supplier in the industry!";
  #inputs
  $name_holder = "Name";
  $email_holder = "Email Address";
  $phone_holder = "Phone Number";
  $subject_holder = "Subject";
  $message_holder = "Message";
  $get_in_touch = "Get in Touch With Us";
};

?>