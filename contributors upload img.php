/* functions.php */
if ( current_user_can('contributor') && !current_user_can('upload_files') )
     add_action('admin_init', 'allow_contributor_uploads');      
     function allow_contributor_uploads() {
          $contributor = get_role('contributor');
          $contributor->add_cap('upload_files');
     }
