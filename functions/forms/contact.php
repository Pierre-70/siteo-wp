<?php
/**
 * Caldera Forms - PHP Export 
 * Demande de contact 
 * @see https://calderaforms.com/doc/exporting-caldera-forms/ 
 * @version    1.8.9
 * @license   GPL-2.0+
 * 
 */


/**
                     * Hooks to load form.
                     * Remove "caldera_forms_admin_forms" if you do not want this form to show in admin entry viewer
                     */
                    add_filter( "caldera_forms_get_forms", "slug_register_caldera_forms_demandedecontact" );
                    add_filter( "caldera_forms_admin_forms", "slug_register_caldera_forms_demandedecontact" );
                    /**
                     * Add form to front-end and admin
                     *
                     * @param array $forms All registered forms
                     *
                     * @return array
                     */
                    function slug_register_caldera_forms_demandedecontact( $forms ) {
                        $forms["demande-de-contact"] = apply_filters( "caldera_forms_get_form-demande-de-contact", array() );
                        return $forms;
                    };

/**
 * Filter form request to include form structure to be rendered
 *
 * @since 1.3.1
 *
 * @param $form array form structure
 */


add_filter( 'caldera_forms_get_form-demande-de-contact', function( $form ){
	$name = 'Nom du site';
	$email = get_field("contact_e-mail", "options");

	
	return array(
  '_last_updated' => 'Tue, 24 Dec 2019 10:41:46 +0000',
  'ID' => 'demande-de-contact',
  'cf_version' => '1.8.9',
  'name' => 'Demande de contact',
  'scroll_top' => 0,
  'success' => 'Le formulaire a été envoyé. Nous vous répondrons dès que possible.',
  'db_support' => 1,
  'pinned' => 1,
  'pin_roles' => 
  array(
    'all_roles' => 1,
  ),
  'hide_form' => 1,
  'check_honey' => 1,
  'avatar_field' => 'email',
  'form_ajax' => 1,
  'custom_callback' => '',
  'layout_grid' => 
  array(
    'fields' => 
    array(
      'nom' => '1:1',
      'email' => '1:2',
      'message' => '2:1',
      'submit' => '3:1',
    ),
    'structure' => '6:6|12|12',
  ),
  'fields' => 
  array(
    'nom' => 
    array(
      'ID' => 'nom',
      'type' => 'text',
      'label' => 'Nom',
      'slug' => 'nom',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'placeholder' => '',
        'default' => '',
        'type_override' => 'text',
        'mask' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'email' => 
    array(
      'ID' => 'email',
      'type' => 'email',
      'label' => 'E-mail',
      'slug' => 'email',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'placeholder' => '',
        'default' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'message' => 
    array(
      'ID' => 'message',
      'type' => 'paragraph',
      'label' => 'Message',
      'slug' => 'message',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'placeholder' => '',
        'rows' => 7,
        'default' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'submit' => 
    array(
      'ID' => 'submit',
      'type' => 'button',
      'label' => 'Envoyer le message',
      'slug' => 'submit',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'type' => 'submit',
        'class' => 'btn btn-default',
        'target' => '',
      ),
    ),
  ),
  'page_names' => 
  array(
    0 => 'Page 1',
  ),
  'mailer' => 
  array(
    'on_insert' => 1,
    'sender_name' => '%nom%',
    'sender_email' => $email,
    'reply_to' => '%email%',
    'email_type' => 'html',
    'recipients' => $email,
    'bcc_to' => '',
    'email_subject' => 'Demande de contact',
    'email_message' => '{summary}',
  ),
  'processors' => 
  array(
    'fp_17689566' => 
    array(
      'ID' => 'fp_17689566',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'auto_responder',
      'config' => 
      array(
        'sender_name' => $name,
        'sender_email' => $email,
        'reply_to' => $email,
        'cc' => '',
        'bcc' => '',
        'subject' => 'Demande de contact',
        'recipient_name' => '%nom%',
        'recipient_email' => '%email%',
        'message' => 'Bonjour,
Merci pour votre message.
Nous vous répondrons dès que possible!
Voici le message que vous nous avez adressé:
------------------------
{summary}',
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
  ),
  'conditional_groups' => 
  array(
    '_open_condition' => '',
  ),
  'settings' => 
  array(
    'responsive' => 
    array(
      'break_point' => 'sm',
    ),
  ),
  'privacy_exporter_enabled' => false,
  'version' => '1.8.9',
  'db_id' => '2',
  'type' => 'primary',
  '_external_form' => 1,
);
} );
