<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$lang['acl_access_granted']                         = 'Access granted';
$lang['acl_action']                                 = 'Action';
$lang['acl_available_entities_coma_separated']      = 'Available entities (coma separated)';
$lang['acl_core_modules']                           = 'Core modules';
$lang['acl_core_policy']                            = 'Core policy';
$lang['acl_edit_tip']                               = 'For every action select an entity name and the minimum required access right.';
$lang['acl_entity']                                 = 'Entity';
$lang['acl_full_control']                           = 'Full control';
$lang['acl_index_tip']                              = 'For every single module there exists a security policy. A security policy consists of a set of entries each being a touple containing a controller action name, entity and the minimal access right above the entity that must be granted to an user in order to be able to execute the the action. For example in order to access File Manager the user must be given a full access right over the entity called FILESYSTEM.';
$lang['acl_label_security_policy']                  = 'Security policy utilities';
$lang['acl_label_security_policy_check_own_rights'] = 'Check own access rights';
$lang['acl_list_of_entities']                       = 'List of entities';
$lang['acl_module']                                 = 'Module';
$lang['acl_module_access_and_own_rights']           = 'Module access and own rights';
$lang['acl_no_access']                              = 'No access';
$lang['acl_read']                                   = 'Read';
$lang['acl_required_rights']                        = 'Required rights';
$lang['acl_security_policy_not_defined']            = 'Security policy is not defined';
$lang['acl_system']                                 = 'System';
$lang['acl_system_access_and_own_rights']           = 'System access and own rights';
$lang['acl_tip_no_entities_found']                  = 'No entities found! First define the available entities, save and then build the policy.';
$lang['acl_userspace_modules']                      = 'User space modules';
$lang['acl_warning_policy_read_only']               = 'You cannot modify core security policy in the production release system. The following form is read-only.';
$lang['acl_write']                                  = 'Write';
$lang['act_security_policy_for']                    = 'Security policy for %s';