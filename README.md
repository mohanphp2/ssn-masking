# ssn-masking
- Install the ssn_convertor module
-  create a new filed to existing content type like below
- - Field Type: plain text
- - Field label: SSN Number
- - Field Machine Name: field_ssn_number
- Add the twig code to node twig for example : node--[machine-name].html.twig  which usally located at /custom/theme/templates/
- Clear the cache by using drush or drupal admin side.
