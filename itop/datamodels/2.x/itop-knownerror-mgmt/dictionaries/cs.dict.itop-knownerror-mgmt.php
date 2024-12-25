<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author Lukáš Dvořák <lukas.dvorak@itopportal.cz>
 * @author Daniel Rokos <daniel.rokos@itopportal.cz>
 *
 */
Dict::Add('CS CZ', 'Czech', 'Čeština', [
	'Class:KnownError' => 'Známá chyba',
	'Class:KnownError+' => 'Pro známou příčinu zdokumentovaná chyba',
	'Class:KnownError/Attribute:ci_list' => 'Konfigurační položky',
	'Class:KnownError/Attribute:ci_list+' => 'Všechny konfigurační položky vztahující se k této známé chybě',
	'Class:KnownError/Attribute:cust_name' => 'Název zákazníka',
	'Class:KnownError/Attribute:cust_name+' => '',
	'Class:KnownError/Attribute:document_list' => 'Dokumenty',
	'Class:KnownError/Attribute:document_list+' => 'Všechny dokumenty spojené s touto známou chybou',
	'Class:KnownError/Attribute:domain' => 'Oblast',
	'Class:KnownError/Attribute:domain+' => '',
	'Class:KnownError/Attribute:domain/Value:Application' => 'Aplikace',
	'Class:KnownError/Attribute:domain/Value:Application+' => '',
	'Class:KnownError/Attribute:domain/Value:Desktop' => 'Desktop',
	'Class:KnownError/Attribute:domain/Value:Desktop+' => '',
	'Class:KnownError/Attribute:domain/Value:Network' => 'Síť',
	'Class:KnownError/Attribute:domain/Value:Network+' => '',
	'Class:KnownError/Attribute:domain/Value:Server' => 'Server',
	'Class:KnownError/Attribute:domain/Value:Server+' => '',
	'Class:KnownError/Attribute:error_code' => 'Kód chyby',
	'Class:KnownError/Attribute:error_code+' => '',
	'Class:KnownError/Attribute:model' => 'Model',
	'Class:KnownError/Attribute:model+' => '',
	'Class:KnownError/Attribute:name' => 'Název',
	'Class:KnownError/Attribute:name+' => '',
	'Class:KnownError/Attribute:org_id' => 'Zákazník',
	'Class:KnownError/Attribute:org_id+' => '',
	'Class:KnownError/Attribute:problem_id' => 'Související problém',
	'Class:KnownError/Attribute:problem_id+' => '',
	'Class:KnownError/Attribute:problem_ref' => 'ID Souvisejícího problému',
	'Class:KnownError/Attribute:problem_ref+' => '',
	'Class:KnownError/Attribute:root_cause' => 'Primární příčina',
	'Class:KnownError/Attribute:root_cause+' => '',
	'Class:KnownError/Attribute:solution' => 'Řešení',
	'Class:KnownError/Attribute:solution+' => '',
	'Class:KnownError/Attribute:symptom' => 'Příznak',
	'Class:KnownError/Attribute:symptom+' => '',
	'Class:KnownError/Attribute:vendor' => 'Dodavatel',
	'Class:KnownError/Attribute:vendor+' => '',
	'Class:KnownError/Attribute:version' => 'Verze',
	'Class:KnownError/Attribute:version+' => '',
	'Class:KnownError/Attribute:workaround' => 'Náhradní řešení (workaround)',
	'Class:KnownError/Attribute:workaround+' => '',
	'Class:lnkDocumentToError' => 'Spojení (Dokument / Chyba)',
	'Class:lnkDocumentToError+' => 'Spojení mezi dokumentem a známou chybou',
	'Class:lnkDocumentToError/Attribute:document_id' => 'Dokument',
	'Class:lnkDocumentToError/Attribute:document_id+' => '',
	'Class:lnkDocumentToError/Attribute:document_name' => 'Název dokumentu',
	'Class:lnkDocumentToError/Attribute:document_name+' => '',
	'Class:lnkDocumentToError/Attribute:error_id' => 'Chyba',
	'Class:lnkDocumentToError/Attribute:error_id+' => '',
	'Class:lnkDocumentToError/Attribute:error_name' => 'Název chyby',
	'Class:lnkDocumentToError/Attribute:error_name+' => '',
	'Class:lnkDocumentToError/Attribute:link_type' => 'link_type',
	'Class:lnkDocumentToError/Attribute:link_type+' => '',
	'Class:lnkDocumentToError/Name' => '%1$s / %2$s~~',
	'Class:lnkErrorToFunctionalCI' => 'Spojení (Chyba / Funkční konfigurační položka)',
	'Class:lnkErrorToFunctionalCI+' => 'Konfigurační položky vztahující se k chybě',
	'Class:lnkErrorToFunctionalCI/Attribute:error_id' => 'Chyba',
	'Class:lnkErrorToFunctionalCI/Attribute:error_id+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:error_name' => 'Název chyby',
	'Class:lnkErrorToFunctionalCI/Attribute:error_name+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_id' => 'Konfigurační položka',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_name' => 'Název konfigurační položky',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:reason' => 'Důvod',
	'Class:lnkErrorToFunctionalCI/Attribute:reason+' => '',
	'Class:lnkErrorToFunctionalCI/Name' => '%1$s / %2$s~~',
	'Menu:NewError' => 'Nová známá chyba',
	'Menu:NewError+' => 'Vytvoření nové známé chyby',
	'Menu:Problem:KnownErrors' => 'Všechny známé chyby',
	'Menu:Problem:KnownErrors+' => 'Všechny známé chyby',
	'Menu:Problem:Shortcuts' => 'Odkazy',
	'Menu:ProblemManagement' => 'Správa problémů',
	'Menu:ProblemManagement+' => 'Správa problémů',
	'Menu:SearchError' => 'Hledat známé chyby',
	'Menu:SearchError+' => 'Hledat známé chyby',
]);