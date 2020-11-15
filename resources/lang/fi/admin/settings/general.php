<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory -verkkotunnus',
    'ad_domain_help'			=> 'Tämä on joskus sama kuin sähköpostiosoitteesi, mutta ei aina.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'Kopio sähköpostiosoite',
    'admin_cc_email_help'       => 'Mikäli haluat lähettää erilliseen sähköpostiosoitteeseen kopion käyttäjälle lähetettävästä sähköposti-ilmoituksesta palautuksiin/luovutuksiin liittyen, syötä se tähän. Muussa tapauksessa jätä kenttä tyhjäksi.',
    'is_ad'				        => 'Tämä on Active Directory -palvelin',
    'alert_email'				=> 'Lähetä ilmoitukset',
    'alerts_enabled'			=> 'Hälytykset käytössä',
    'alert_interval'			=> 'Kynnysrajan kynnys (päivinä)',
    'alert_inv_threshold'		=> 'Varaston hälytysraja',
    'asset_ids'					=> 'Omaisuuden tunnukset',
    'audit_interval'            => 'Tilintarkastusväli',
    'audit_interval_help'       => 'Jos sinun on säännöllisesti tarkastettava varojasi fyysisesti, anna aikaväli kuukausina.',
    'audit_warning_days'        => 'Tarkastuksen varoituskynnys',
    'audit_warning_days_help'   => 'Kuinka monta päivää etukäteen varoitamme, kun varat on suoritettava tilintarkastukseen?',
    'auto_increment_assets'		=> 'Luo automaattisesti kasvavat laite-ID:t',
    'auto_increment_prefix'		=> 'Etuliite (valinnainen)',
    'auto_incrementing_help'    => 'Ota ensin käyttöön automaattinen lisäys omaisuuden tunnuksista',
    'backups'					=> 'Varmuuskopiointi',
    'barcode_settings'			=> 'Viivakoodi asetukset',
    'confirm_purge'			    => 'Vahvista poisto',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Oma CSS',
    'custom_css_help'			=> 'Anna haluamasi mukautetut CSS-ohitukset. Älä lisää &lt;style&gt;&lt;/style&gt; tunnisteita.',
    'custom_forgot_pass_url'	=> 'Muokattu Salasanan Nollaus URL-osoite',
    'custom_forgot_pass_url_help'	=> 'Tämä korvaa sisäänrakennetun salasanan palautuspalvelun URL-osoitteen. Sen avulla voit ohjata käyttäjät organisaation sisäiseen tai isännöityyn LDAP-salasanan vaihtotoimintoon.',
    'dashboard_message'			=> 'Työpöydän Viesti',
    'dashboard_message_help'	=> 'Tämä teksti esiintyy työpöydällä kaikille, joilla on oikeus tarkastella työpöytää.',
    'default_currency'  		=> 'Oletusvaluutta',
    'default_eula_text'			=> 'Oletus EULA',
    'default_language'			=> 'Oletuskieli',
    'default_eula_help_text'	=> 'Voit myös liittää muokattuja EULA-sopimuksia tiettyihin omaisuusluokkiin.',
    'display_asset_name'        => 'Näytä laitteen nimi listauksessa',
    'display_checkout_date'     => 'Näytä luovutuspäivämäärä listauksessa',
    'display_eol'               => 'Näytä elinaika listauksessa',
    'display_qr'                => 'Näytä neliökoodit',
    'display_alt_barcode'		=> 'Näytä 1D viivakoodi',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D viivakoodityyppi',
    'alt_barcode_type'			=> '1D viivakoodityyppi',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA-asetukset',
    'eula_markdown'				=> 'Tämä EULA sallii <a href="https://help.github.com/articles/github-flavored-markdown/">Github-maustamattoman markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Ylimääräinen Alatunnisteen Teksti ',
    'footer_text_help'          => 'Tämä teksti esiintyy oikeanpuoleisessa alatunnisteessa. Linkit ovat sallittuja käyttämällä  <a href="https://help.github.com/articles/github-flavored-markdown/">Github merkintätapaa</a>. Rivinvaihdot, otsikot, kuvat, jne. voivat johtaa epätoivottuihin tuloksiin.',
    'general_settings'			=> 'Yleiset asetukset',
    'generate_backup'			=> 'Luo varmuuskopio',
    'header_color'              => 'Yläosion logo',
    'info'                      => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Versio Laravel',
    'ldap_enabled'              => 'LDAP käytössä',
    'ldap_integration'          => 'LDAP integraatio',
    'ldap_settings'             => 'LDAP Asetukset',
    'ldap_login_test_help'      => 'Syötä toimiva LDAP-käyttäjätunnus ja salasana määrittelemästäsi base DN: stä testataksesi LDAP-kirjautumisen toimivuutta. SINUN TULEE TALLENTAA UUDET LDAP ASETUKSET ENSIN.',
    'ldap_login_sync_help'      => 'Tämä testaa vain LDAP-synkronoinnin toimivuutta. Mikäli LDAP autentikointikysely on virheellinen, käyttäjät eivät voi kirjautua sisään. SINUN TULEE TALLENTAA UUDET ASETUKSET ENSIN.',
    'ldap_server'               => 'LDAP Palvelin',
    'ldap_server_help'          => 'Tämän pitäisi alkaa ldap: // (salaamaton tai TLS) tai ldaps: // (SSL)',
    'ldap_server_cert'			=> 'LDAP SSL Varmenteen varmennus',
    'ldap_server_cert_ignore'	=> 'Salli virheelliset SSL Varmenteet',
    'ldap_server_cert_help'		=> 'Valitse tämä valintaruutu, jos käytät itse allekirjoitettua SSL-varmennetta ja haluat hyväksyä virheellisen SSL-varmennuksen.',
    'ldap_tls'                  => 'Käytä TLS: ää',
    'ldap_tls_help'             => 'Tämä on tarkistettava vain, jos käynnistät STARTTLS: n LDAP-palvelimella.',
    'ldap_uname'                => 'LDAP-sitoa käyttäjätunnusta',
    'ldap_pword'                => 'LDAP-sidontalasana',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-suodatin',
    'ldap_pw_sync'              => 'LDAP-salasanan synkronointi',
    'ldap_pw_sync_help'         => 'Poista tämä valintaruutu, jos et halua säilyttää LDAP-salasanoja synkronoituna paikallisilla salasanoilla. Tämän poistaminen käytöstä tarkoittaa, että käyttäjät eivät ehkä voi kirjautua sisään, jos LDAP-palvelin ei jostain syystä ole tavoitettavissa.',
    'ldap_username_field'       => 'Käyttäjätunnus',
    'ldap_lname_field'          => 'Sukunimi',
    'ldap_fname_field'          => 'LDAP Etunimi',
    'ldap_auth_filter_query'    => 'LDAP-todennuskysely',
    'ldap_version'              => 'LDAP Versio',
    'ldap_active_flag'          => 'LDAP-aktiivinen lippu',
    'ldap_emp_num'              => 'LDAP-työntekijän numero',
    'ldap_email'                => 'LDAP Sähköposti',
    'license'                  => 'Ohjelmistolisenssi',
    'load_remote_text'          => 'Etäkriptit',
    'load_remote_help_text'		=> 'Tämä Snipe-IT-asennus voi ladata skriptejä ulkopuolelta.',
    'login_note'                => 'Kirjautumisviesti',
    'login_note_help'           => 'Voit myös sisällyttää muutamia lauseita kirjautumisruudulle, esimerkiksi auttaa ihmisiä, jotka ovat löytäneet kadonneen tai varastetun laitteen. Tämä kenttä hyväksyy <a href="https://help.github.com/articles/github-flavored-markdown/">Github-maustamaton markdown</a>',
    'login_remote_user_text'    => 'Etäkäyttäjän kirjautumisvaihtoehdot',
    'login_remote_user_enabled_text' => 'Salli kirjautuminen etäkäyttäjäkäyttäjän otsikolla',
    'login_remote_user_enabled_help' => 'Tämä vaihtoehto mahdollistaa autentikoinnin REMOTE_USER otsikolla "Common Gateway Interface (rfc3875)" määrityksen mukaisesti',
    'login_common_disabled_text' => 'Estä muut autentikointimenetelmät',
    'login_common_disabled_help' => 'Tämä vaihtoehto estää muut autentikointimenetelmät. Salli tämä vaihtoehto, jos olet varma REMOTE_USER kirjautumisen toimivuudesta',
    'login_remote_user_custom_logout_url_text' => 'Räätälöity uloskirjautumisen URL',
    'login_remote_user_custom_logout_url_help' => 'Jos URL on syötetty, käyttäjät ohjataan tähän URL-osoitteeseen uloskirjautumisen yhteydessä. Tämä on hyödyllinen esimerkiksi ulkoisen autentikointipalvelun käyttäjäistuntojen päättämisessä oikein.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Käytä tulostuksessa',
    'logo_print_assets_help'    => 'Käytä tuotemerkintöjä tulostettavassa nimikeluettelossa ',
    'full_multiple_companies_support_help_text' => 'Käyttäjien (myös ylläpitäjien) rajoittaminen yrityksille varattavaksi yrityksen omiin varoihin.',
    'full_multiple_companies_support_text' => 'Täysi monikansallisten yritysten tuki',
    'show_in_model_list'   => 'Näytä Malli-valintalistoissa',
    'optional'					=> 'valinnainen',
    'per_page'                  => 'Tuloksia Per Sivu',
    'php'                       => 'Versio PHP',
    'php_gd_info'               => 'Sinun tulee asentaa php-gd paketti näyttääksesi QR-koodit, katso lisätietoja asennusohjeista.',
    'php_gd_warning'            => 'PHP Image Prosessing ja GD-lisäosia EI ole asennettuna.',
    'pwd_secure_complexity'     => 'Salasanan monimutkaisuus',
    'pwd_secure_complexity_help' => 'Valitse mikä tahansa salasanan monimutkaisuus sääntö, jonka haluat panna täytäntöön.',
    'pwd_secure_min'            => 'Salasanan minimimerkit',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Estä tavalliset salasanat',
    'pwd_secure_uncommon_help'  => 'Tämä estää käyttäjiä käyttämästä yhteisiä salasanoja ylimmistä 10 000 salasanasta, jotka on ilmoitettu rikkoneen.',
    'qr_help'                   => 'Ota QR-koodit käyttöön valitaksesi tämän',
    'qr_text'                   => 'QR-koodin Teksti',
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
    'setting'                   => 'Asetus',
    'settings'                  => 'Asetukset',
    'show_alerts_in_menu'       => 'Näytä ilmoitukset ylävalikossa',
    'show_archived_in_list'     => 'Arkistoidut Nimikkeet',
    'show_archived_in_list_text'     => 'Näytä arkistoidut nimikkeet "kaikki nimikkeet" listauksessa',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Näytä kuvia sähköposteissa',
    'show_images_in_email_help'   => 'Poista tämä valinta, jos Snipe-IT asennus on toteutettu VPN: n avulla tai suljetussa verkossa, koska sähköposteissa käytetyt kuvat eivät voi latautua näkyviin sähköposteissa.',
    'site_name'                 => 'Sivuston Nimi',
    'slack_botname'             => 'Löysä Botname',
    'slack_channel'             => 'Löytää kanava',
    'slack_endpoint'            => 'Lakkautettu loppupiste',
    'slack_integration'         => 'Slackin asetukset',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Kun olet tallentanut tiedot Slackista, testinappi ilmestyy.',
    'slack_test_help'           => 'Testaa, onko integraatio Slackiin määritelty oikein. SINUN TULEE TALLENTAA UUDET ASETUKSET ENSIN.',
    'snipe_version'  			=> 'Snipe-IT versio',
    'support_footer'            => 'Tuki-alatunnisteen linkit ',
    'support_footer_help'       => 'Määrittele, kuka voi nähdä linkit Snipe-IT tukipalvelun tietoihin ja käyttöohjeeseen',
    'version_footer'            => 'Versio alatunnisteessa ',
    'version_footer_help'       => 'Määrittele, kuka näkee Snipe-IT järjestelmän version ja käännöksen numeron.',
    'system'                    => 'Järjestelmän Tiedot',
    'update'                    => 'Päivitä Asetukset',
    'value'                     => 'Arvo',
    'brand'                     => 'brändäys',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Tietoa Asetuksista',
    'about_settings_text'       => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'labels_per_page'           => 'Tarrat sivua kohden',
    'label_dimensions'          => 'Tarran mitat (tuumaa)',
    'next_auto_tag_base'        => 'Seuraava automaattinen lisäys',
    'page_padding'              => 'Sivun marginaalit (tuumaa)',
    'privacy_policy_link'       => 'Linkki Tietosuojaselosteeseen',
    'privacy_policy'            => 'Tietosuojaseloste',
    'privacy_policy_link_help'  => 'Jos URL on määritelty, linkki omaan Tietosuojaselosteeseesi lisätään sovelluksen alatunnisteeseen kaikissa lähetettävissä sähköposteissa GDPR-vaatimusten mukaisesti. ',
    'purge'                     => 'Puhdista poistetut tietueet',
    'labels_display_bgutter'    => 'Merkitse pohjaventtiili',
    'labels_display_sgutter'    => 'Etikettipuoli',
    'labels_fontsize'           => 'Tarrafontin koko',
    'labels_pagewidth'          => 'Tarra-arkin leveys',
    'labels_pageheight'         => 'Tarralevyn korkeus',
    'label_gutters'        => 'Tarraetäisyys (tuumaa)',
    'page_dimensions'        => 'Sivun mitat (tuumaa)',
    'label_fields'          => 'Merkitse näkyvät kentät',
    'inches'        => 'tuumaa',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Linkki Snipe-IT: hen sähköposteissa',
    'show_url_in_emails_help_text'      => 'Poista tämä valintaruutu, jos et halua linkata takaisin Snipe-IT-asennukseen sähköpostin alatunnisteisiin. Hyödyllinen, jos useimmat käyttäjät eivät koskaan kirjaudu sisään.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Suurin pikkukuva',
    'thumbnail_max_h_help'   => 'Enimmäiskorkeus kuvapisteissä, jotka pienoiskuvat voivat näkyä listalle nähden. Min 25, max 500.',
    'two_factor'        => 'Kaksi tekijän todentamista',
    'two_factor_secret'        => 'Kaksi-tekijäkoodi',
    'two_factor_enrollment'        => 'Kahden tekijän ilmoittautuminen',
    'two_factor_enabled_text'        => 'Ota käyttöön kaksi tekijää',
    'two_factor_reset'        => 'Nollaa kaksi tekijän salaisuus',
    'two_factor_reset_help'        => 'Tämä pakottaa käyttäjän rekisteröimään laitteen uudelleen Google Authenticator -palveluun. Tämä voi olla hyödyllistä, jos heidän tällä hetkellä rekisteröidyt laitteet menetetään tai varastetaan.',
    'two_factor_reset_success'          => 'Kaksi tekijälaitetta onnistuneesti nollattu',
    'two_factor_reset_error'          => 'Kaksi tekijän laitteen nollausta epäonnistui',
    'two_factor_enabled_warning'        => 'Kaksikerroksen ottaminen käyttöön, jos sitä ei ole tällä hetkellä käytössä, välittömästi pakottaa sinut autentikoimaan Google Auth -ohjelmaan kuuluvalla laitteella. Sinulla on mahdollisuus rekisteröidä laite, jos et ole tällä hetkellä rekisteröitynyt.',
    'two_factor_enabled_help'        => 'Tämä kytkee kaksitasoisen todennuksen käyttämällä Google Authenticatoria.',
    'two_factor_optional'        => 'Valikoiva (Käyttäjät voivat ottaa käyttöön tai poistaa käytöstä, jos sallittu)',
    'two_factor_required'        => 'Vaatii kaikille käyttäjille',
    'two_factor_disabled'        => 'Liikuntarajoitteinen',
    'two_factor_enter_code'	=> 'Syötä kaksi tekijäkoodi',
    'two_factor_config_complete'	=> 'Lähetä koodi',
    'two_factor_enabled_edit_not_allowed' => 'Järjestelmänvalvoja ei salli sinun muokata tätä asetusta.',
    'two_factor_enrollment_text'	=> "Kaksi tekijän todennusta tarvitaan, mutta laitteesi ei ole vielä kirjoittanut. Avaa Google Authenticator -sovellus ja skannaa alla oleva QR-koodi rekisteröidäksesi laitteesi. Kun olet kirjoittanut laitteesi, kirjoita alla oleva koodi",
    'require_accept_signature'      => 'Vaadittava allekirjoitus',
    'require_accept_signature_help_text'      => 'Tämän ominaisuuden ottaminen käyttöön edellyttää käyttäjiltä fyysisesti kirjautumista hyväksymisen yhteydessä.',
    'left'        => 'vasen',
    'right'        => 'oikea',
    'top'        => 'Ylin',
    'bottom'        => 'pohja',
    'vertical'        => 'pystysuora',
    'horizontal'        => 'vaakasuora',
    'unique_serial'                => 'Yksilölliset sarjanumerot',
    'unique_serial_help_text'                => 'Valintaruudun valinta pakottaa yksilöllisyysrajoitteen käyttöön nimikkeiden sarjanumeroissa',
    'zerofill_count'        => 'Omaisuusavun pituus, mukaan lukien nollatäyttö',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
