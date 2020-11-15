<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => '"Active Directory" domenas',
    'ad_domain_help'			=> 'Tai kartais sutampa su jūsų el. Pašto domenu, bet ne visada.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'CC El. paštas',
    'admin_cc_email_help'       => 'Jeigu Jūs norite siųsti išduoto/neišduoto turto sąrašo kopiją, įveskite čia el. pašto adresą. Kitu atveju palikite laukelį tuščią.',
    'is_ad'				        => 'Tai yra "Active Directory" serveris',
    'alert_email'				=> 'Siūsti įspėjimus',
    'alerts_enabled'			=> 'Perspėjimai įjungti',
    'alert_interval'			=> 'Galiojanti įspėjimų slenkstis (dienomis)',
    'alert_inv_threshold'		=> 'Inventoriaus įspėjimo slenkstis',
    'asset_ids'					=> 'Įrangos ID',
    'audit_interval'            => 'Audito intervalas',
    'audit_interval_help'       => 'Jei turite reguliariai fiziškai tikrinti savo turtą, įveskite intervalą per mėnesius.',
    'audit_warning_days'        => 'Audito įspėjimo slenkstis',
    'audit_warning_days_help'   => 'Kiek dienų iš anksto turėtume įspėti, kada turėtume atlikti auditą?',
    'auto_increment_assets'		=> 'Sukurti automatiškai didėjantį įragos ID nr.',
    'auto_increment_prefix'		=> 'Papilomas priedėlis (pasirinktinai)',
    'auto_incrementing_help'    => 'Įjungti automatiškai didėjantį įrangos ID pirmajam suteikiant šį nr.',
    'backups'					=> 'Atsarginė kopija',
    'barcode_settings'			=> 'Prekės kodo nustatymai',
    'confirm_purge'			    => 'Patvirtinkite švarą',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Užsakytas CSS',
    'custom_css_help'			=> 'Įveskite bet kokį užsakytą CSS peržiūrėjimo norėtumėte naudoti. Neįtraukite &lt;style>&lt;/Stilius&gt; žymės.',
    'custom_forgot_pass_url'	=> 'Pasirinktinio slaptažodžio atkūrimo nuoroda',
    'custom_forgot_pass_url_help'	=> 'Tai pakeičia pamiršto slaptažodžio nuorodą prisijungimo lange. Naudinga tiesiogiai nukreipti į LDAP slaptažodžio atkūrimo funkcionalumą. Būtų efektyviau išjungti vietinių vartotojų pamirštų slaptažodžių funkcionalumą.',
    'dashboard_message'			=> 'Prietaisų skydelio pranešimai',
    'dashboard_message_help'	=> 'Šis tekstas bus rodomas valdymo skydelyje, kiekvienam turinčiam teisę peržiūrėti valdymo skydelį.',
    'default_currency'  		=> 'Numatytoji valiuta',
    'default_eula_text'			=> 'Numatytasis EULA',
    'default_language'			=> 'Numatyta kalba',
    'default_eula_help_text'	=> 'Jūs taip pat galite susieti pritaikytą EULĄ specifinėms įrangos grupėms.',
    'display_asset_name'        => 'Rodyti įrangos pavadinimą',
    'display_checkout_date'     => 'Rodyti išdavimo datą',
    'display_eol'               => 'Rodyti įrangos naudojimo pabaigos datas lentelės pavidalu',
    'display_qr'                => 'Rodyti QR kodus',
    'display_alt_barcode'		=> 'Rodyti 1D barkodus',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D barkodo tipas',
    'alt_barcode_type'			=> '1D barkodo tipas',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA nustatymai',
    'eula_markdown'				=> 'Šis EULA leidžia <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Papildomas poraštė tekstas ',
    'footer_text_help'          => 'Šis tekstas bus rodomas dešinėje poraštės pusėje. Nuorodos leidžiamos naudojant <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Eilutės lūžei, antraštės, paveiksliukai etc gali sukelti nenuspėjamus rezultatus.',
    'general_settings'			=> 'Bendrieji nustatymai',
    'generate_backup'			=> 'Atsarginė kopija',
    'header_color'              => 'Atraštės spalva',
    'info'                      => 'Šie nustatymai leidžia jums pasirinkti savus diegimo nustatymus.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel versija',
    'ldap_enabled'              => 'LDAP įjungtas',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP nustatymai',
    'ldap_login_test_help'      => 'Prašome įvesti tinkamą LDAP vartotojo vardą ir slaptažodį iš bazės DN. Jūs privalote patikrinti ar LDAP prisijungimas sukonfigūruotas tinkamai. PIRMIAUSIA JŪS PRIVALOTE IŠSAUGOTI LDAP NUSTATYMUS.',
    'ldap_login_sync_help'      => 'Tai patikrina ar LDAP sinchronizacija teisinga. Jeigu Jūsų LADAP autentifikacijos užkalusa nėra teisinga, vartotojai gali negalėti prisijungti. PIRMIAUSIA JŪS PRIVALOTE IŠSAUGOTI LDAP NUSTATYMUS.',
    'ldap_server'               => 'LDAP serveris',
    'ldap_server_help'          => 'Tai turėtų prasidėti su ldap: // (nešifruotam arba TLS) arba ldaps: (jei tai SSL)',
    'ldap_server_cert'			=> 'LDAP SSL sertifikato patvirtinimas',
    'ldap_server_cert_ignore'	=> 'Leisti nepatvirtintą SSL sertifikatą',
    'ldap_server_cert_help'		=> 'Pažymėkite jeigu naudojate savo pasirašytą SSL sertifikatą ir norite naudoti neegzistuojanti SSL sertifikatą.',
    'ldap_tls'                  => 'Naudokite TLS',
    'ldap_tls_help'             => 'Tai turėtų būti tikrinama, jei jūsų LDAP serveryje naudojate STARTTLS.',
    'ldap_uname'                => 'LDAP vartotojo vardas',
    'ldap_pword'                => 'LDAP slaptažodis',
    'ldap_basedn'               => 'DN',
    'ldap_filter'               => 'LDAP filtras',
    'ldap_pw_sync'              => 'LDAP slaptažodžių sinchronizavimas',
    'ldap_pw_sync_help'         => 'Išvalykite šį laukelį, jei nenorite, kad LDAP slaptažodžiai būtų sinchronizuojami su vietiniais slaptažodžiais. Išjungus tai reiškia, kad jūsų vartotojai gali nepavykti prisijungti, jei dėl kokios nors priežasties jūsų LDAP serveris nepasiekiamas.',
    'ldap_username_field'       => 'Vartotojo vardo laukelis',
    'ldap_lname_field'          => 'Pavardė',
    'ldap_fname_field'          => 'LDAP vardas',
    'ldap_auth_filter_query'    => 'LDAP prisijungimo užklausa',
    'ldap_version'              => 'LDAP versija',
    'ldap_active_flag'          => 'LDAP aktyvios vėliavos',
    'ldap_emp_num'              => 'LDAP darbuotojų skaičius',
    'ldap_email'                => 'LDAP el.paštas',
    'license'                  => 'Programinės įrangos licenzija',
    'load_remote_text'          => 'Nuotoliniai skriptai',
    'load_remote_help_text'		=> 'Šis Snipe-IT įdiegimas gali įtraukti programinius kodus iš interneto.',
    'login_note'                => 'Prisijungimo pastaba',
    'login_note_help'           => 'Pasirinktinai į savo prisijungimo ekraną įtraukite keletą sakinių, pavyzdžiui, kad padėtumėte žmonėms, kurie rasti pamestą ar pavogtą įrenginį. Šiame lauke pritariama <a href="https://help.github.com/articles/github-flavored-markdown/"> "Github" skonio markdown</a>',
    'login_remote_user_text'    => 'Nuotolinio vartotojo prisijungimo parametrai',
    'login_remote_user_enabled_text' => 'Įjungti nuotolinį prisijungimą naudojant vartotojo antraštę',
    'login_remote_user_enabled_help' => 'Ši opcija įjungia autentifikaciją "REMOTE_USER" per "Cammon Gateway" vartotojo sąsają (rfc3875)',
    'login_common_disabled_text' => 'Išjungti kitus autentifikacijos mechanizmus',
    'login_common_disabled_help' => 'Ši opcija išjungia kitus autentifikacijos mechanizmus. Šią funkciją įjunkite jeigu esate tikri jog REMOTE_USER prisijungimas veikia',
    'login_remote_user_custom_logout_url_text' => 'Pasirinktinė atsijungimo URL',
    'login_remote_user_custom_logout_url_help' => 'Čia įveskite nuorodą į kurią bus nukreipti vartotojai prisijungę prie Snite-IT. Tai naudinga uždarant vartotojo sesiją.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logotipas',
    'logo_print_assets'         => 'Naudoti spausdinimui',
    'logo_print_assets_help'    => 'Naudoti turto sąrašą spausdinimą ',
    'full_multiple_companies_support_help_text' => 'Apriboti vartotojai (įskaitant administratorius) priskirtus kompanijoms.',
    'full_multiple_companies_support_text' => 'Pilnas kelių kompanijų palaikymas',
    'show_in_model_list'   => 'Rodyti išskleidžiame modelyje',
    'optional'					=> 'pasirinktinai',
    'per_page'                  => 'Rezultatai puslapyje',
    'php'                       => 'PHP versija',
    'php_gd_info'               => 'Jūs turite įdiegti PHP-GD, kad rodytų QR kodus, tam peržiūrėkite diegimo instrukcijas.',
    'php_gd_warning'            => 'PHP vaizdo apdorojimas ir GD papildinys neįdiegtas.',
    'pwd_secure_complexity'     => 'Slaptažodžio sudėtingumas',
    'pwd_secure_complexity_help' => 'Pasirinkite bet kurį slaptažodžio sudėtingumo taisykles, kurias norite vykdyti.',
    'pwd_secure_min'            => 'Slaptažodis minimalus simbolių',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Neleiskite bendrų slaptažodžių',
    'pwd_secure_uncommon_help'  => 'Tai neleis vartotojams naudoti bendrų slaptažodžių iš didžiausių 10 000 slaptažodžių, apie kuriuos pranešta pažeidimų metu.',
    'qr_help'                   => 'Įjungti QR kodus prieš nustatant tai',
    'qr_text'                   => 'QR kodo tekstas',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Nustatymai',
    'settings'                  => 'Nustatymai',
    'show_alerts_in_menu'       => 'Rodyti įspėjimus viršutiniame meniu',
    'show_archived_in_list'     => 'Archyvuotas turtas',
    'show_archived_in_list_text'     => 'Rodyti archyvuotą turtą "visame turto" sąraše',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Rodyti nuotraukas el. pašte',
    'show_images_in_email_help'   => 'Nuimkite žymelę jeigu jūsų Snipe-IT instaliacija yra VPN arba uždarame tinkle ir vartotojai esantys už tinklo negalės įkrauti paveikslėlių jų el. paštuose.',
    'site_name'                 => 'Interneto puslapio pavadinimas',
    'slack_botname'             => 'Slack\'o boto vardas',
    'slack_channel'             => 'Slack\'o kanalas',
    'slack_endpoint'            => 'Slack\'o galutinis taškas',
    'slack_integration'         => 'Slack\'o nustatymai',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Jeigu jūs išsaugosite informaciją, testavimo mygtukas bus rodomas.',
    'slack_test_help'           => 'Patikrinkite, ar tinkamai atlikta „Slack“ konfigūracija. Jūs privalote išsaugoti savo "SLACK" nustatymus pirmiausia.',
    'snipe_version'  			=> 'Snipe-IT versija',
    'support_footer'            => 'Palaikomos poraštė nuorodos ',
    'support_footer_help'       => 'Nurodykite, kas matys nuorodas į „Snipe-IT“ palaikymo informacijos ir naudotojo vadovą',
    'version_footer'            => 'Versija poraštėje ',
    'version_footer_help'       => 'Nurodykite kad galės matyti Snipe-IT versijas ir versijos numerius.',
    'system'                    => 'Sistemos informacija',
    'update'                    => 'Atnaujinti nustatymus',
    'value'                     => 'Vertė',
    'brand'                     => 'Prekinis ženklinimas',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Apie nustatymus',
    'about_settings_text'       => 'Šie nustatymai leidžia jums pasirinkti savus diegimo nustatymus.',
    'labels_per_page'           => 'Etikečių puslapyje',
    'label_dimensions'          => 'Etiketės išmatavimai (coliais)',
    'next_auto_tag_base'        => 'Kitas automatinis prieaugis',
    'page_padding'              => 'Puslapio maržos (coliais)',
    'privacy_policy_link'       => 'Privatumo politikos nuorodos',
    'privacy_policy'            => 'Privatumo politika',
    'privacy_policy_link_help'  => 'Jeigu nuorodas įterpsite čia tai nuorodos privatumo politikos bus įterptas poraštėje ir kiekviename siunčiame el. laiške, palaikant GDPR. ',
    'purge'                     => 'Išvalyti ištrintus įrašus',
    'labels_display_bgutter'    => 'Etiketės apatinis latakai',
    'labels_display_sgutter'    => 'Etiketės pusės latakai',
    'labels_fontsize'           => 'Etiketės šrifto dydis',
    'labels_pagewidth'          => 'Etiketės lapo plotis',
    'labels_pageheight'         => 'Etiketės lapo aukštis',
    'label_gutters'        => 'Etiketės tarpai (coliais)',
    'page_dimensions'        => 'Puslapio matmenys (coliais)',
    'label_fields'          => 'Žymėti laukus',
    'inches'        => 'colių',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Nuoroda į "Snipe-IT" el. Paštu',
    'show_url_in_emails_help_text'      => 'Atžymėkite šį langelį, jei nenorite susieti savo "Snipe-IT" diegimo savo el. Pašto dėžutėse. Naudinga, jei dauguma jūsų naudotojų niekada nebus prisijungę.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Didžiausias miniatiūros aukštis',
    'thumbnail_max_h_help'   => 'Didžiausias pikselių aukštis gali būti, kad miniatiūros gali būti rodomos sąrašo rodinyje. Min 25, maks. 500.',
    'two_factor'        => 'Du veiksnių autentifikavimas',
    'two_factor_secret'        => 'Dviejų veiksnių kodas',
    'two_factor_enrollment'        => 'Dviejų veiksnių registracija',
    'two_factor_enabled_text'        => 'Įgalinti du veiksnius',
    'two_factor_reset'        => 'Atstatyti dviejų veiksnių paslaptį',
    'two_factor_reset_help'        => 'Tai privers naudotoją vėl įrašyti įrenginį "Google" autentifikavimo priemone. Tai gali būti naudinga, jei jų šiuo metu užregistruotas įrenginys yra pamestas ar pavogtas.',
    'two_factor_reset_success'          => 'Dviejų veiksnių įrenginys sėkmingai iš naujo nustatomas',
    'two_factor_reset_error'          => 'Dviejų veiksnių įrenginio atstatymas nepavyko',
    'two_factor_enabled_warning'        => 'Įjungus dviejų faktorių, jei jis šiuo metu neįjungtas, iš karto privers jus patvirtinti autentifikavimu naudojant "Google" prijungtą įrenginį. Jūs turėsite galimybę įregistruoti savo įrenginį, jei jis šiuo metu nėra įtrauktas.',
    'two_factor_enabled_help'        => 'Tai įgalins dviejų veiksnių autentifikavimą naudojant "Google Authenticator".',
    'two_factor_optional'        => 'Atrankinis (vartotojai gali įjungti arba išjungti, jei tai leidžiama)',
    'two_factor_required'        => 'Reikalingas visiems vartotojams',
    'two_factor_disabled'        => 'Neįgalus',
    'two_factor_enter_code'	=> 'Įveskite dviejų veiksnių kodą',
    'two_factor_config_complete'	=> 'Pateikti kodeksą',
    'two_factor_enabled_edit_not_allowed' => 'Jūsų administratorius neleidžia jums redaguoti šio nustatymo.',
    'two_factor_enrollment_text'	=> "Būtina atlikti du autentiškumo patvirtinimo veiksnius, tačiau jūsų įrenginys dar nebuvo užregistruotas. Atidarykite \"Google\" autentifikavimo priemonės programą ir nuskaitykite žemiau esantį QR kodą, kad užsiregistruotumėte savo įrenginį. Įrašę savo įrenginį įveskite žemiau esantį kodą",
    'require_accept_signature'      => 'Reikalauti parašo',
    'require_accept_signature_help_text'      => 'Įjungus šią funkciją, naudotojams reikės fiziškai atsisakyti priimti turtą.',
    'left'        => 'kairėje',
    'right'        => 'teisus',
    'top'        => 'viršuje',
    'bottom'        => 'apačioje',
    'vertical'        => 'vertikalus',
    'horizontal'        => 'horizontalus',
    'unique_serial'                => 'Unikalus serijinis numeris',
    'unique_serial_help_text'                => 'Pažymėtas šis langelis reiškia unikalius serijinius kiekvienam turtui',
    'zerofill_count'        => 'Turto žymų ilgis, įskaitant "zerofill"',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);