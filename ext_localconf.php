<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Krable.LawyerDirectory',
            'Lawyerdirectory',
            [
                'Lawyer' => 'list, show, new, create, edit, update, searh',
                'Title' => 'list, show',
                'Specialistattorney' => 'list, show',
                'BalanceSheetLawyerRankingLogo' => 'list, show',
                'Specialistareas' => 'list, show',
                'Languages' => 'list, show',
                'Training' => 'list, show',
                'Workexperience' => 'list, show',
                'Membership' => 'list, show',
                'Canton' => 'list, show',
                'Certification ' => 'list, show',
                'Admissiontothebar' => 'list, show',
                'Testimonial' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Lawyer' => 'create, show, list, update',
                'Title' => '',
                'Specialistattorney' => '',
                'BalanceSheetLawyerRankingLogo' => '',
                'Specialistareas' => '',
                'Languages' => '',
                'Training' => '',
                'Workexperience' => '',
                'Membership' => '',
                'Canton' => '',
                'Certification' => '',
                'Admissiontothebar' => '',
                'Testimonial' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        lawyerdirectory {
                            iconIdentifier = lawyer_directory-plugin-lawyerdirectory
                            title = LLL:EXT:lawyer_directory/Resources/Private/Language/locallang_db.xlf:tx_lawyer_directory_lawyerdirectory.name
                            description = LLL:EXT:lawyer_directory/Resources/Private/Language/locallang_db.xlf:tx_lawyer_directory_lawyerdirectory.description
                            tt_content_defValues {
                                CType = list
                                list_type = lawyerdirectory_lawyerdirectory
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'lawyer_directory-plugin-lawyerdirectory',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:lawyer_directory/Resources/Public/Icons/user_plugin_lawyerdirectory.svg']
			);

        // Custom Routing Aspects Mapper
         $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['IdentifierValueMapper'] = \Krable\LawyerDirectory\Routing\Aspect\IdentifierValueMapper::class;
         $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['UrlEncodeMapper'] = \Krable\LawyerDirectory\Routing\Aspect\UrlEncodeMapper::class;
         $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][Krable\LawyerDirectory\RedirectUpdates\RedirectUpdates::class] = array(
            'extension'        => 'Lawyerdirectory',
            'title'            => 'Redirect Updates',
            'description'      => 'Redirect Updates'
        );

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Seo\Canonical\CanonicalGenerator::class] = [
            'className' => Krable\LawyerDirectory\Xclass\CanonicalGenerator::class
        ];
    }
);



