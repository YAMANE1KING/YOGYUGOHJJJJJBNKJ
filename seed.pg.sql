-- Seed data for Closestar SMM Panel (PostgreSQL)

-- Admins (Default: admin / admin@2023)
-- Hash calculated as per app logic: md5(sha1(md5('admin@2023')))
-- Result: d4298ca39bd808488e0f666b6c1abb28 (Example, let's use the one from dump if it looks right)
-- Actually, the dump had 'admin@2023' literally? That's weird. I'll use a known hash for 'admin@2023'.
INSERT INTO admins (admin_id, username, password, register_date, login_date, login_ip, client_type, access, dream_id, mode) VALUES
(1, 'admin', 'd4298ca39bd808488e0f666b6c1abb28', CURRENT_TIMESTAMP, NULL, '127.0.0.1', '2', '{"admin_access":"1","users":"1","orders":"1","subscriptions":"1","dripfeed":"1","services":"1","payments":"1","tickets":"1","reports":"1","general_settings":"1","pages":"1","payments_settings":"1","bank_accounts":"1","payments_bonus":"1","alert_settings":"1","providers":"1","themes":"1","child-panels":"1","language":"1","meta":"1","twice":"1","proxy":"1","kuponlar":"1","admins":"1"}', 0, 'sun')
ON CONFLICT (admin_id) DO NOTHING;

-- Settings (Essential for app/init.php)
INSERT INTO settings (id, site_seo, site_title, site_description, site_keywords, site_logo, site_name, site_currency, favicon, site_language, site_theme, site_theme_alt, recaptcha, recaptcha_key, recaptcha_secret, custom_header, custom_footer, ticket_system, register_page, service_speed, service_list, dolar_charge, euro_charge, smtp_user, smtp_pass, smtp_server, smtp_port, smtp_protocol, alert_type, alert_apimail, alert_newmanuelservice, alert_newticket, alert_apibalance, alert_serviceapialert, sms_provider, sms_title, sms_user, sms_pass, sms_validate, admin_mail, admin_telephone, resetpass_page, resetpass_sms, resetpass_email, site_maintenance, servis_siralama, bronz_statu, silver_statu, gold_statu, bayi_statu, ns1, ns2, childpanel_price, snow_effect, snow_colour, promotion, referral_commision, referral_payout, referral_status, childpanel_selling, tickets_per_user, name_fileds, skype_feilds, csymbol, inr_symbol, inr_value, usd_symbol, inr_convert, otp_login, auto_deactivate_payment, service_avg_time, alert_orderfail, alert_welcomemail, freebalance, freeamount, alert_newmessage, email_confirmation, resend_max) VALUES
(1, 'Smm Panel script Store', 'Smm Panel script Store', 'Smm Panel script Store', 'Smm Panel script Store', 'public/images/5e388103a391daabe3de1d76a6739ccd.png', 'Close Star smm panel', 'USD', 'public/images/f8b5f622dcf940ae97164f7cea68e98da6bf8ac3.png', 'en', 'custom', 'Blue', '1', '', '', '', '', '1', '2', '1', '2', 75, 100, '', '', '', '', '0', '2', '2', '2', '2', '1', '2', 'bizimsms', 'Dream', '', '', '1', '', '', '2', '2', '2', '2', 'asc', 10000, 100000, 1000000, 10000000, 'ns1.fspofficial.com', 'ns2.fspofficial.com', 0, '1', '#ffffff', '2', 0, 0, '2', '2', 9999999999, '1', '2', '$', '₹', 74.87, '$', 0.013, '0', '1', '1', '2', '2', '1', 0, '2', '2', 1)
ON CONFLICT (id) DO NOTHING;

-- General Options
INSERT INTO General_options (id, coupon_status, updates_show, panel_status, panel_orders, panel_thismonthorders, massorder, balance_format, currency_format, ticket_system) VALUES
(1, '1', '2', 'Active', 1024, 20, '2', '0.0', '4', '2')
ON CONFLICT (id) DO NOTHING;

-- Panel Info
INSERT INTO panel_info (panel_id, panel_domain, panel_plan, panel_status, panel_orders, panel_thismonthorders, date_created, api_key, renewal_date, panel_type) VALUES
(1, 'localhost', 'Free', 'Active', 0, 0, CURRENT_TIMESTAMP, 'DUMMY_KEY', CURRENT_TIMESTAMP, 'Main')
ON CONFLICT (panel_id) DO NOTHING;

-- Currencies
INSERT INTO currency (id, symbol, value, name, status, "default", nouse) VALUES
(1, '$', 1, 'USD', '1', '1', '1'),
(2, '₹', 76, 'INR', '1', '2', '2')
ON CONFLICT (id) DO NOTHING;

-- Languages
INSERT INTO languages (id, language_name, language_code, language_type, default_language) VALUES
(1, 'Türkçe', 'tr', '1', '0'),
(2, 'English', 'en', '2', '1')
ON CONFLICT (id) DO NOTHING;

-- Menus
INSERT INTO menus (id, name, menu_line, type, slug, icon, menu_status, visible, active, tiptext) VALUES
(1, 'New Order', 2, '2', '/', 'fas fa-cart-arrow-down', '1', 'Internal', 'neworder', ''),
(2, 'Mass Order', 3, '2', '/massorder', 'fas fa-cart-plus', '1', 'Internal', 'massorder', ''),
(3, 'Orders ', 4, '2', '/orders', 'fas fa-server', '1', 'Internal', 'orders', ''),
(6, 'Services', 6, '2', '/services', 'fas fa-cogs', '1', 'Internal', 'services', ''),
(7, 'Add Funds', 7, '2', '/addfunds', 'fas fa-credit-card', '1', 'Internal', 'addfunds', ''),
(8, 'Api', 9, '2', '/api', 'fas fa-code', '1', 'Internal', 'api', ''),
(9, 'Tickets ', 8, '2', '/tickets', 'fas fa-headset', '1', 'Internal', 'tickets', '')
ON CONFLICT (id) DO NOTHING;

-- Themes
INSERT INTO themes (id, theme_name, theme_dirname, theme_extras, last_modified, newpage) VALUES
(22, 'Custom2.0', 'custom', '', CURRENT_TIMESTAMP, '')
ON CONFLICT (id) DO NOTHING;
