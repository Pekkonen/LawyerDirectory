<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Krable.LawyerDirectory',
            'Lawyerdirectory',
            'Lawyer Directory'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('lawyer_directory', 'Configuration/TypoScript', 'Lawyer Directory');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_lawyer', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_lawyer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_lawyer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_title', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_title.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_title');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_specialistattorney', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_specialistattorney.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_specialistattorney');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_balancesheetlawyerrankinglogo', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_balancesheetlawyerrankinglogo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_balancesheetlawyerrankinglogo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_specialistareas', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_specialistareas.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_specialistareas');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_languages', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_languages.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_languages');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_training', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_training.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_training');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_workexperience', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_workexperience.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_workexperience');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_membership', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_membership.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_membership');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_canton', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_canton.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_canton');


	    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_certification',  'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_certification.xlf');
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_certification');


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_admissiontothebar', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_admissiontothebar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_admissiontothebar');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lawyerdirectory_domain_model_testimonial', 'EXT:lawyer_directory/Resources/Private/Language/locallang_csh_tx_lawyerdirectory_domain_model_testimonial.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lawyerdirectory_domain_model_testimonial');

    }
);

