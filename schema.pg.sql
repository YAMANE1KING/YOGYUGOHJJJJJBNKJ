-- PostgreSQL Schema for SMMSIMBA

CREATE TABLE admins (
    admin_id SERIAL PRIMARY KEY,
    username VARCHAR(225) DEFAULT NULL,
    password TEXT NOT NULL,
    register_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    login_date TIMESTAMP DEFAULT NULL,
    login_ip VARCHAR(225) DEFAULT NULL,
    client_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (client_type IN ('1','2')),
    access TEXT DEFAULT NULL,
    dream_id INTEGER NOT NULL DEFAULT 0,
    mode VARCHAR(225) NOT NULL DEFAULT 'sun'
);

CREATE TABLE article (
    id SERIAL PRIMARY KEY,
    title VARCHAR(128) NOT NULL,
    content TEXT NOT NULL,
    published_at TIMESTAMP DEFAULT NULL,
    image_file VARCHAR(200) DEFAULT NULL
);

CREATE TABLE bank_accounts (
    id SERIAL PRIMARY KEY,
    bank_name VARCHAR(225) NOT NULL,
    bank_sube VARCHAR(225) NOT NULL,
    bank_hesap VARCHAR(225) NOT NULL,
    bank_iban TEXT NOT NULL,
    bank_alici VARCHAR(225) NOT NULL
);

CREATE TABLE blogs (
    id SERIAL PRIMARY KEY,
    title VARCHAR(128) NOT NULL,
    content TEXT NOT NULL,
    published_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    image_file VARCHAR(200) DEFAULT NULL,
    status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (status IN ('1','2')),
    blog_get VARCHAR(225) NOT NULL,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    category_id SERIAL PRIMARY KEY,
    category_name TEXT NOT NULL,
    category_line DOUBLE PRECISION NOT NULL,
    category_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (category_type IN ('1','2')),
    category_secret VARCHAR(50) NOT NULL DEFAULT '2' CHECK (category_secret IN ('1','2')),
    category_icon TEXT NOT NULL,
    is_refill VARCHAR(50) NOT NULL DEFAULT '1' CHECK (is_refill IN ('1','2'))
);

CREATE TABLE childpanels (
    id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    domain VARCHAR(191) NOT NULL,
    currency VARCHAR(191) NOT NULL,
    child_username VARCHAR(191) NOT NULL,
    child_password VARCHAR(191) NOT NULL,
    charge DOUBLE PRECISION NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT 'Pending' CHECK (status IN ('Pending','Active','Frozen','Suspended')),
    renewal_date DATE NOT NULL,
    date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    dreampanel_id INTEGER NOT NULL,
    keyc VARCHAR(225) NOT NULL
);

CREATE TABLE clients (
    client_id SERIAL PRIMARY KEY,
    name VARCHAR(225) DEFAULT NULL,
    email VARCHAR(225) NOT NULL,
    username VARCHAR(225) DEFAULT NULL,
    admin_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (admin_type IN ('1','2')),
    password TEXT NOT NULL,
    telephone VARCHAR(225) DEFAULT NULL,
    balance DECIMAL(21,7) NOT NULL,
    balance_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (balance_type IN ('1','2')),
    debit_limit DOUBLE PRECISION DEFAULT NULL,
    spent DECIMAL(21,7) NOT NULL,
    register_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    login_date TIMESTAMP DEFAULT NULL,
    login_ip VARCHAR(225) DEFAULT NULL,
    apikey TEXT NOT NULL,
    tel_type VARCHAR(50) NOT NULL DEFAULT '1' CHECK (tel_type IN ('1','2')),
    email_type VARCHAR(50) NOT NULL DEFAULT '1' CHECK (email_type IN ('1','2')),
    client_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (client_type IN ('1','2')),
    access TEXT DEFAULT NULL,
    lang VARCHAR(255) NOT NULL DEFAULT 'tr',
    timezone DOUBLE PRECISION NOT NULL DEFAULT 0,
    currency_type VARCHAR(50) NOT NULL DEFAULT 'USD' CHECK (currency_type IN ('INR','USD')),
    ref_code TEXT NOT NULL,
    ref_by TEXT DEFAULT NULL,
    change_email VARCHAR(50) NOT NULL DEFAULT '2' CHECK (change_email IN ('1','2')),
    resend_max INTEGER NOT NULL,
    currency VARCHAR(225) NOT NULL DEFAULT '1',
    passwordreset_token VARCHAR(225) NOT NULL,
    verified VARCHAR(50) NOT NULL DEFAULT 'No' CHECK (verified IN ('Yes','No')),
    coustm_rate DOUBLE PRECISION NOT NULL DEFAULT 0
);

CREATE TABLE clients_category (
    id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    category_id INTEGER NOT NULL
);

CREATE TABLE clients_price (
    id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    service_id INTEGER NOT NULL,
    service_price DOUBLE PRECISION NOT NULL
);

CREATE TABLE clients_service (
    id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    service_id INTEGER NOT NULL
);

CREATE TABLE client_report (
    id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    action TEXT NOT NULL,
    report_ip VARCHAR(225) NOT NULL,
    report_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE currency (
    id SERIAL PRIMARY KEY,
    symbol TEXT DEFAULT NULL,
    value DOUBLE PRECISION DEFAULT NULL,
    name VARCHAR(225) NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (status IN ('1','2')),
    "default" VARCHAR(50) NOT NULL DEFAULT '2' CHECK ("default" IN ('2','1')),
    nouse VARCHAR(50) NOT NULL DEFAULT '2' CHECK (nouse IN ('1','2'))
);

CREATE TABLE earn (
    earn_id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    link TEXT NOT NULL,
    earn_note TEXT NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT 'Pending' CHECK (status IN ('Pending','Under Review','Funds Granted','Rejected','Not Eligible'))
);

CREATE TABLE General_options (
    id SERIAL PRIMARY KEY,
    coupon_status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (coupon_status IN ('1','2')),
    updates_show VARCHAR(50) NOT NULL DEFAULT '1' CHECK (updates_show IN ('1','2')),
    panel_status VARCHAR(50) NOT NULL CHECK (panel_status IN ('Pending','Active','Frozen','Suspended')),
    panel_orders INTEGER NOT NULL,
    panel_thismonthorders INTEGER NOT NULL,
    massorder VARCHAR(50) NOT NULL DEFAULT '2' CHECK (massorder IN ('1','2')),
    balance_format VARCHAR(50) NOT NULL DEFAULT '0.0' CHECK (balance_format IN ('0.0','0.00','0.000','0.0000')),
    currency_format VARCHAR(50) NOT NULL DEFAULT '3' CHECK (currency_format IN ('0','2','3','4')),
    ticket_system VARCHAR(50) NOT NULL DEFAULT '1' CHECK (ticket_system IN ('1','2'))
);

CREATE TABLE integrations (
    id SERIAL PRIMARY KEY,
    method_get VARCHAR(225) NOT NULL,
    method_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (method_type IN ('1','2')),
    method_extras TEXT NOT NULL,
    method_name TEXT NOT NULL,
    method_line DOUBLE PRECISION NOT NULL,
    link TEXT NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE kuponlar (
    id SERIAL PRIMARY KEY,
    kuponadi VARCHAR(255) NOT NULL,
    adet INTEGER NOT NULL,
    tutar DOUBLE PRECISION NOT NULL
);

CREATE TABLE kupon_kullananlar (
    id SERIAL PRIMARY KEY,
    uye_id INTEGER NOT NULL,
    kuponadi VARCHAR(255) NOT NULL,
    tutar DOUBLE PRECISION NOT NULL
);

CREATE TABLE languages (
    id SERIAL PRIMARY KEY,
    language_name VARCHAR(225) NOT NULL,
    language_code VARCHAR(225) NOT NULL,
    language_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (language_type IN ('2','1')),
    default_language VARCHAR(50) NOT NULL DEFAULT '0' CHECK (default_language IN ('0','1'))
);

CREATE TABLE Mailforms (
    id SERIAL PRIMARY KEY,
    subject VARCHAR(225) NOT NULL,
    message VARCHAR(225) NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (status IN ('1','2')),
    header VARCHAR(225) NOT NULL,
    footer VARCHAR(225) NOT NULL,
    type VARCHAR(50) NOT NULL DEFAULT 'Users' CHECK (type IN ('Admins','Users'))
);

CREATE TABLE menus (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    menu_line DOUBLE PRECISION NOT NULL,
    type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (type IN ('1','2')),
    slug VARCHAR(225) NOT NULL DEFAULT '2',
    icon VARCHAR(225) DEFAULT NULL,
    menu_status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (menu_status IN ('1','2')),
    visible VARCHAR(50) NOT NULL DEFAULT 'Internal' CHECK (visible IN ('Internal','External')),
    active VARCHAR(225) NOT NULL,
    tiptext VARCHAR(225) NOT NULL
);

CREATE TABLE notifications_popup (
    id SERIAL PRIMARY KEY,
    title TEXT NOT NULL,
    action_link TEXT NOT NULL,
    isAllPage VARCHAR(50) NOT NULL DEFAULT '0' CHECK (isAllPage IN ('0','1')),
    isAllUser VARCHAR(50) NOT NULL DEFAULT '0' CHECK (isAllUser IN ('1','0')),
    expiry_date DATE NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (status IN ('1','2','0')),
    allPages VARCHAR(225) NOT NULL,
    description TEXT NOT NULL,
    action_text TEXT NOT NULL
);

CREATE TABLE orders (
    order_id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    service_id INTEGER NOT NULL,
    api_orderid INTEGER NOT NULL DEFAULT 0,
    order_error TEXT NOT NULL,
    order_detail TEXT DEFAULT NULL,
    order_api INTEGER NOT NULL DEFAULT 0,
    api_serviceid INTEGER NOT NULL DEFAULT 0,
    api_charge DOUBLE PRECISION NOT NULL DEFAULT 0,
    api_currencycharge DOUBLE PRECISION DEFAULT 1,
    order_profit DOUBLE PRECISION NOT NULL,
    order_quantity DOUBLE PRECISION NOT NULL,
    order_extras TEXT NOT NULL,
    order_charge DOUBLE PRECISION NOT NULL,
    dripfeed VARCHAR(50) DEFAULT '1' CHECK (dripfeed IN ('1','2','3')),
    dripfeed_id DOUBLE PRECISION NOT NULL DEFAULT 0,
    subscriptions_id DOUBLE PRECISION NOT NULL DEFAULT 0,
    subscriptions_type VARCHAR(50) NOT NULL DEFAULT '1' CHECK (subscriptions_type IN ('1','2')),
    dripfeed_totalcharges DOUBLE PRECISION DEFAULT NULL,
    dripfeed_runs DOUBLE PRECISION DEFAULT NULL,
    dripfeed_delivery DOUBLE PRECISION NOT NULL DEFAULT 0,
    dripfeed_interval DOUBLE PRECISION DEFAULT NULL,
    dripfeed_totalquantity DOUBLE PRECISION DEFAULT NULL,
    dripfeed_status VARCHAR(50) NOT NULL DEFAULT 'active' CHECK (dripfeed_status IN ('active','completed','canceled')),
    order_url TEXT NOT NULL,
    order_start DOUBLE PRECISION NOT NULL DEFAULT 0,
    order_finish DOUBLE PRECISION NOT NULL DEFAULT 0,
    order_remains DOUBLE PRECISION NOT NULL DEFAULT 0,
    order_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    order_status VARCHAR(50) NOT NULL DEFAULT 'pending' CHECK (order_status IN ('pending','inprogress','completed','partial','processing','canceled')),
    subscriptions_status VARCHAR(50) NOT NULL DEFAULT 'active' CHECK (subscriptions_status IN ('active','paused','completed','canceled','expired','limit')),
    subscriptions_username TEXT DEFAULT NULL,
    subscriptions_posts DOUBLE PRECISION DEFAULT NULL,
    subscriptions_delivery DOUBLE PRECISION NOT NULL DEFAULT 0,
    subscriptions_delay DOUBLE PRECISION DEFAULT NULL,
    subscriptions_min DOUBLE PRECISION DEFAULT NULL,
    subscriptions_max DOUBLE PRECISION DEFAULT NULL,
    subscriptions_expiry DATE DEFAULT NULL,
    last_check TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    order_where VARCHAR(50) NOT NULL DEFAULT 'site' CHECK (order_where IN ('site','api')),
    refill_status VARCHAR(50) NOT NULL DEFAULT 'Pending' CHECK (refill_status IN ('Pending','Refilling','Completed','Rejected','Error')),
    is_refill VARCHAR(50) NOT NULL DEFAULT '1' CHECK (is_refill IN ('1','2')),
    refill VARCHAR(225) NOT NULL DEFAULT '1',
    cancelbutton VARCHAR(50) NOT NULL DEFAULT '1' CHECK (cancelbutton IN ('1','2')),
    show_refill VARCHAR(50) NOT NULL DEFAULT 'true' CHECK (show_refill IN ('true','false')),
    api_refillid DOUBLE PRECISION NOT NULL DEFAULT 0,
    avg_done VARCHAR(50) NOT NULL DEFAULT '1' CHECK (avg_done IN ('0','1'))
);

CREATE TABLE pages (
    page_id SERIAL PRIMARY KEY,
    page_name VARCHAR(225) NOT NULL,
    page_get VARCHAR(225) NOT NULL,
    page_content TEXT NOT NULL,
    page_status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (page_status IN ('1','2')),
    active VARCHAR(50) NOT NULL DEFAULT '1' CHECK (active IN ('1','2')),
    seo_title VARCHAR(225) NOT NULL,
    seo_keywords VARCHAR(225) NOT NULL,
    seo_description VARCHAR(225) NOT NULL,
    last_modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE panel_info (
    panel_id SERIAL PRIMARY KEY,
    panel_domain TEXT NOT NULL,
    panel_plan TEXT NOT NULL,
    panel_status VARCHAR(50) NOT NULL CHECK (panel_status IN ('Pending','Active','Frozen','Suspended')),
    panel_orders INTEGER NOT NULL,
    panel_thismonthorders INTEGER NOT NULL,
    date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    api_key VARCHAR(225) NOT NULL,
    renewal_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    panel_type VARCHAR(50) NOT NULL DEFAULT 'Main' CHECK (panel_type IN ('Child','Main'))
);

CREATE TABLE payments (
    payment_id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    client_balance DOUBLE PRECISION NOT NULL DEFAULT 0,
    payment_amount DOUBLE PRECISION NOT NULL,
    payment_privatecode DOUBLE PRECISION DEFAULT NULL,
    payment_method INTEGER NOT NULL,
    payment_status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (payment_status IN ('1','2','3')),
    payment_delivery VARCHAR(50) NOT NULL DEFAULT '1' CHECK (payment_delivery IN ('1','2')),
    payment_note TEXT NOT NULL,
    payment_mode VARCHAR(50) NOT NULL DEFAULT 'Otomatik' CHECK (payment_mode IN ('Manuel','Otomatik','Auto')),
    payment_create_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    payment_update_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    payment_ip VARCHAR(225) NOT NULL,
    payment_extra TEXT NOT NULL,
    payment_bank INTEGER NOT NULL,
    t_id VARCHAR(255) DEFAULT NULL
);

CREATE TABLE payments_bonus (
    bonus_id SERIAL PRIMARY KEY,
    bonus_method INTEGER NOT NULL,
    bonus_from DOUBLE PRECISION NOT NULL,
    bonus_amount DOUBLE PRECISION NOT NULL,
    bonus_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (bonus_type IN ('1','2'))
);

CREATE TABLE payment_methods (
    id SERIAL PRIMARY KEY,
    method_name VARCHAR(225) NOT NULL,
    method_get VARCHAR(225) NOT NULL,
    method_min DOUBLE PRECISION NOT NULL,
    method_max DOUBLE PRECISION NOT NULL,
    method_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (method_type IN ('1','2')),
    method_extras TEXT NOT NULL,
    method_line DOUBLE PRECISION NOT NULL,
    nouse VARCHAR(50) NOT NULL DEFAULT '2' CHECK (nouse IN ('1','2'))
);

CREATE TABLE referral (
    referral_id SERIAL PRIMARY KEY,
    referral_client_id INTEGER NOT NULL,
    referral_clicks DOUBLE PRECISION NOT NULL DEFAULT 0,
    referral_sign_up DOUBLE PRECISION NOT NULL DEFAULT 0,
    referral_totalFunds_byReffered DOUBLE PRECISION NOT NULL DEFAULT 0,
    referral_earned_commision DOUBLE PRECISION DEFAULT 0,
    referral_requested_commision VARCHAR(225) DEFAULT '0',
    referral_total_commision DOUBLE PRECISION DEFAULT 0,
    referral_status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (referral_status IN ('1','2')),
    referral_code TEXT NOT NULL,
    referral_rejected_commision DOUBLE PRECISION NOT NULL
);

CREATE TABLE referral_payouts (
    r_p_id SERIAL PRIMARY KEY,
    r_p_code TEXT NOT NULL,
    r_p_status VARCHAR(50) NOT NULL DEFAULT '0' CHECK (r_p_status IN ('1','2','3','4','0')),
    r_p_amount_requested DOUBLE PRECISION NOT NULL,
    r_p_requested_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    r_p_updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    client_id INTEGER NOT NULL
);

CREATE TABLE refill_status (
    id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    order_id INTEGER NOT NULL,
    refill_apiid INTEGER DEFAULT NULL,
    order_url TEXT NOT NULL,
    creation_date TIMESTAMP DEFAULT NULL,
    ending_date DATE DEFAULT NULL,
    service_name TEXT DEFAULT NULL,
    refill_status VARCHAR(50) DEFAULT 'Pending' CHECK (refill_status IN ('Pending','Refilling','Completed','Rejected','Error')),
    order_apiid INTEGER DEFAULT 0,
    refill_response TEXT DEFAULT NULL,
    refill_where VARCHAR(50) DEFAULT 'site' CHECK (refill_where IN ('site','api'))
);

CREATE TABLE serviceapi_alert (
    id SERIAL PRIMARY KEY,
    service_id INTEGER NOT NULL,
    serviceapi_alert TEXT NOT NULL,
    servicealert_extra TEXT NOT NULL,
    servicealert_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services (
    service_id SERIAL PRIMARY KEY,
    service_api INTEGER NOT NULL DEFAULT 0,
    api_service INTEGER NOT NULL DEFAULT 0,
    api_servicetype VARCHAR(50) NOT NULL DEFAULT '2' CHECK (api_servicetype IN ('1','2')),
    api_detail TEXT NOT NULL,
    category_id INTEGER NOT NULL,
    service_line DOUBLE PRECISION NOT NULL,
    service_type VARCHAR(50) NOT NULL DEFAULT '2' CHECK (service_type IN ('1','2')),
    service_package VARCHAR(50) NOT NULL CHECK (service_package IN ('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17')),
    service_name TEXT NOT NULL,
    service_description TEXT DEFAULT NULL,
    service_price VARCHAR(225) NOT NULL,
    service_min DOUBLE PRECISION NOT NULL,
    service_max DOUBLE PRECISION NOT NULL,
    service_dripfeed VARCHAR(50) NOT NULL DEFAULT '1' CHECK (service_dripfeed IN ('1','2')),
    service_autotime DOUBLE PRECISION NOT NULL DEFAULT 0,
    service_autopost DOUBLE PRECISION NOT NULL DEFAULT 0,
    service_speed VARCHAR(50) NOT NULL CHECK (service_speed IN ('1','2','3','4')),
    want_username VARCHAR(50) NOT NULL DEFAULT '1' CHECK (want_username IN ('1','2')),
    service_secret VARCHAR(50) NOT NULL DEFAULT '2' CHECK (service_secret IN ('1','2')),
    price_type VARCHAR(50) NOT NULL DEFAULT 'normal' CHECK (price_type IN ('normal','percent','amount')),
    price_cal TEXT DEFAULT NULL,
    instagram_second VARCHAR(50) NOT NULL DEFAULT '2' CHECK (instagram_second IN ('1','2')),
    start_count VARCHAR(255) NOT NULL CHECK (start_count IN ('none','instagram_follower','instagram_photo','')),
    instagram_private VARCHAR(50) NOT NULL CHECK (instagram_private IN ('1','2')),
    name_lang VARCHAR(225) DEFAULT 'en',
    description_lang TEXT DEFAULT NULL,
    time_lang VARCHAR(225) NOT NULL DEFAULT 'Not enough data',
    time VARCHAR(225) NOT NULL DEFAULT 'Not enough data',
    cancelbutton VARCHAR(50) NOT NULL DEFAULT '2' CHECK (cancelbutton IN ('1','2')),
    show_refill VARCHAR(50) NOT NULL DEFAULT 'false' CHECK (show_refill IN ('true','false')),
    service_profit VARCHAR(225) NOT NULL,
    refill_days VARCHAR(225) NOT NULL DEFAULT '30',
    refill_hours VARCHAR(225) NOT NULL DEFAULT '24',
    avg_days INTEGER NOT NULL,
    avg_hours INTEGER NOT NULL,
    avg_minutes INTEGER NOT NULL,
    avg_many INTEGER NOT NULL
);

CREATE TABLE service_api (
    id SERIAL PRIMARY KEY,
    api_name VARCHAR(225) NOT NULL,
    api_url TEXT NOT NULL,
    api_key VARCHAR(225) NOT NULL,
    api_type INTEGER NOT NULL,
    api_limit DOUBLE PRECISION NOT NULL DEFAULT 0,
    currency VARCHAR(50) DEFAULT NULL CHECK (currency IN ('INR','USD')),
    api_alert VARCHAR(50) NOT NULL DEFAULT '2' CHECK (api_alert IN ('1','2')),
    status VARCHAR(50) NOT NULL DEFAULT '2' CHECK (status IN ('1','2'))
);

CREATE TABLE settings (
    id SERIAL PRIMARY KEY,
    site_seo TEXT NOT NULL,
    site_title TEXT DEFAULT NULL,
    site_description TEXT DEFAULT NULL,
    site_keywords TEXT DEFAULT NULL,
    site_logo TEXT DEFAULT NULL,
    site_name TEXT DEFAULT NULL,
    site_currency VARCHAR(255) NOT NULL DEFAULT 'try',
    favicon TEXT DEFAULT NULL,
    site_language VARCHAR(225) NOT NULL DEFAULT 'tr',
    site_theme TEXT NOT NULL,
    site_theme_alt TEXT DEFAULT NULL,
    recaptcha VARCHAR(50) NOT NULL DEFAULT '1' CHECK (recaptcha IN ('1','2')),
    recaptcha_key TEXT DEFAULT NULL,
    recaptcha_secret TEXT DEFAULT NULL,
    custom_header TEXT DEFAULT NULL,
    custom_footer TEXT DEFAULT NULL,
    ticket_system VARCHAR(50) NOT NULL DEFAULT '2' CHECK (ticket_system IN ('1','2')),
    register_page VARCHAR(50) NOT NULL DEFAULT '2' CHECK (register_page IN ('1','2')),
    service_speed VARCHAR(50) NOT NULL CHECK (service_speed IN ('1','2')),
    service_list VARCHAR(50) NOT NULL CHECK (service_list IN ('1','2')),
    dolar_charge DOUBLE PRECISION NOT NULL,
    euro_charge DOUBLE PRECISION NOT NULL,
    smtp_user TEXT NOT NULL,
    smtp_pass TEXT NOT NULL,
    smtp_server TEXT NOT NULL,
    smtp_port VARCHAR(225) NOT NULL,
    smtp_protocol VARCHAR(50) NOT NULL CHECK (smtp_protocol IN ('0','ssl','tls')),
    alert_type VARCHAR(50) NOT NULL CHECK (alert_type IN ('1','2','3')),
    alert_apimail VARCHAR(50) NOT NULL CHECK (alert_apimail IN ('1','2')),
    alert_newmanuelservice VARCHAR(50) NOT NULL CHECK (alert_newmanuelservice IN ('1','2')),
    alert_newticket VARCHAR(50) NOT NULL CHECK (alert_newticket IN ('1','2')),
    alert_apibalance VARCHAR(50) NOT NULL CHECK (alert_apibalance IN ('1','2')),
    alert_serviceapialert VARCHAR(50) NOT NULL CHECK (alert_serviceapialert IN ('1','2')),
    sms_provider VARCHAR(225) NOT NULL,
    sms_title VARCHAR(225) NOT NULL,
    sms_user VARCHAR(225) NOT NULL,
    sms_pass VARCHAR(225) NOT NULL,
    sms_validate VARCHAR(50) NOT NULL DEFAULT '0' CHECK (sms_validate IN ('0','1')),
    admin_mail VARCHAR(225) NOT NULL,
    admin_telephone VARCHAR(225) NOT NULL,
    resetpass_page VARCHAR(50) NOT NULL CHECK (resetpass_page IN ('1','2')),
    resetpass_sms VARCHAR(50) NOT NULL CHECK (resetpass_sms IN ('1','2')),
    resetpass_email VARCHAR(50) NOT NULL CHECK (resetpass_email IN ('1','2')),
    site_maintenance VARCHAR(50) NOT NULL DEFAULT '2' CHECK (site_maintenance IN ('1','2')),
    servis_siralama VARCHAR(255) NOT NULL,
    bronz_statu INTEGER NOT NULL,
    silver_statu INTEGER NOT NULL,
    gold_statu INTEGER NOT NULL,
    bayi_statu INTEGER NOT NULL,
    ns1 VARCHAR(191) DEFAULT NULL,
    ns2 VARCHAR(191) DEFAULT NULL,
    childpanel_price DOUBLE PRECISION DEFAULT NULL,
    snow_effect VARCHAR(50) NOT NULL DEFAULT '2' CHECK (snow_effect IN ('1','2')),
    snow_colour TEXT NOT NULL,
    promotion VARCHAR(50) DEFAULT '2' CHECK (promotion IN ('1','2')),
    referral_commision DOUBLE PRECISION NOT NULL,
    referral_payout DOUBLE PRECISION NOT NULL,
    referral_status VARCHAR(50) NOT NULL DEFAULT '1' CHECK (referral_status IN ('1','2')),
    childpanel_selling VARCHAR(50) NOT NULL DEFAULT '1' CHECK (childpanel_selling IN ('1','2')),
    tickets_per_user DOUBLE PRECISION NOT NULL DEFAULT 5,
    name_fileds VARCHAR(50) NOT NULL DEFAULT '1' CHECK (name_fileds IN ('1','2')),
    skype_feilds VARCHAR(50) NOT NULL DEFAULT '1' CHECK (skype_feilds IN ('1','2')),
    csymbol TEXT NOT NULL,
    inr_symbol TEXT NOT NULL,
    inr_value DOUBLE PRECISION NOT NULL DEFAULT 0,
    usd_symbol TEXT NOT NULL,
    inr_convert DOUBLE PRECISION NOT NULL DEFAULT 0,
    otp_login VARCHAR(50) NOT NULL DEFAULT '0' CHECK (otp_login IN ('1','2','0')),
    auto_deactivate_payment VARCHAR(50) NOT NULL DEFAULT '1' CHECK (auto_deactivate_payment IN ('1','2')),
    service_avg_time VARCHAR(50) NOT NULL DEFAULT '0' CHECK (service_avg_time IN ('1','0')),
    alert_orderfail VARCHAR(50) NOT NULL DEFAULT '2' CHECK (alert_orderfail IN ('1','2')),
    alert_welcomemail VARCHAR(50) NOT NULL DEFAULT '2' CHECK (alert_welcomemail IN ('1','2')),
    freebalance VARCHAR(50) NOT NULL DEFAULT '1' CHECK (freebalance IN ('1','2')),
    freeamount DOUBLE PRECISION DEFAULT 0,
    alert_newmessage VARCHAR(50) NOT NULL DEFAULT '1' CHECK (alert_newmessage IN ('1','2')),
    email_confirmation VARCHAR(50) NOT NULL DEFAULT '2' CHECK (email_confirmation IN ('1','2')),
    resend_max INTEGER NOT NULL
);

CREATE TABLE sync_logs (
    id SERIAL PRIMARY KEY,
    service_id INTEGER NOT NULL,
    action VARCHAR(225) NOT NULL,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    description VARCHAR(225) NOT NULL,
    api_id INTEGER NOT NULL
);

CREATE TABLE themes (
    id SERIAL PRIMARY KEY,
    theme_name TEXT NOT NULL,
    theme_dirname TEXT NOT NULL,
    theme_extras TEXT NOT NULL,
    last_modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    newpage TEXT NOT NULL
);

CREATE TABLE tickets (
    ticket_id SERIAL PRIMARY KEY,
    client_id INTEGER NOT NULL,
    subject VARCHAR(225) NOT NULL,
    time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    lastupdate_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    client_new VARCHAR(50) NOT NULL DEFAULT '2' CHECK (client_new IN ('1','2')),
    status VARCHAR(50) NOT NULL DEFAULT 'pending' CHECK (status IN ('pending','answered','closed')),
    support_new VARCHAR(50) NOT NULL DEFAULT '1' CHECK (support_new IN ('1','2')),
    canmessage VARCHAR(50) NOT NULL DEFAULT '2' CHECK (canmessage IN ('1','2'))
);

CREATE TABLE ticket_reply (
    id SERIAL PRIMARY KEY,
    ticket_id INTEGER NOT NULL,
    client_id INTEGER NOT NULL,
    time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    support VARCHAR(50) NOT NULL DEFAULT '1' CHECK (support IN ('1','2')),
    message TEXT NOT NULL,
    readed VARCHAR(50) NOT NULL DEFAULT '1' CHECK (readed IN ('1','2'))
);

CREATE TABLE units_per_page (
    id SERIAL PRIMARY KEY,
    unit INTEGER NOT NULL,
    page TEXT NOT NULL
);

CREATE TABLE updates (
    u_id SERIAL PRIMARY KEY,
    service_id INTEGER NOT NULL,
    action VARCHAR(225) NOT NULL,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    description VARCHAR(225) NOT NULL
);
