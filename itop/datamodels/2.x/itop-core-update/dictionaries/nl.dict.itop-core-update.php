<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */

/**
 * @author Jeffrey Bostoen <info@jeffreybostoen.be> (2018 - 2022)
 * @author Thomas Casteleyn <thomas.casteleyn@super-visions.com>
 */
Dict::Add('NL NL', 'Dutch', 'Nederlands', [
	'Class:ModuleInstallation/Attribute:comment' => 'Opmerkingen',
	'Class:ModuleInstallation/Attribute:installed' => 'Geïnstalleerd op',
	'Class:ModuleInstallation/Attribute:name' => 'Naam',
	'Class:ModuleInstallation/Attribute:version' => 'Versie',
	'Menu:iTopUpdate' => 'Upgrade toepassing',
	'Menu:iTopUpdate+' => 'Upgrade toepassing',
	'iTopUpdate:Error:BadFileContent' => 'Upgradebestand is geen toepassingsarchief',
	'iTopUpdate:Error:BadFileFormat' => 'Upgradebestand is geen ZIP-bestand',
	'iTopUpdate:Error:BadItopProduct' => 'Upgradebestand is niet compatibel met jouw toepassing',
	'iTopUpdate:Error:Copy' => 'Fout: kan niet kopiëren van "%1$s" naar "%2$s"',
	'iTopUpdate:Error:CorruptedFile' => 'Bestand %1$s is corrupt',
	'iTopUpdate:Error:FileNotFound' => 'Bestand niet gevonden',
	'iTopUpdate:Error:FileUploadMaxSizeTooSmall' => 'De maximale bestandsgrootte voor uploads lijkt te klein voor deze update. Controleer de PHP-configuratie.',
	'iTopUpdate:Error:InvalidToken' => 'Token ongeldig',
	'iTopUpdate:Error:MissingFile' => 'Bestand ontbreekt: %1$s',
	'iTopUpdate:Error:MissingFunction' => 'Onmogelijk om de upgrade te starten, een functie ontbreekt',
	'iTopUpdate:Error:NoFile' => 'Geen bestand opgegeven',
	'iTopUpdate:Error:UpdateFailed' => 'Upgrade mislukt',
	'iTopUpdate:UI:Action' => 'Update',
	'iTopUpdate:UI:Back' => 'Vorige',
	'iTopUpdate:UI:Backup' => 'Er is een backup gegenereerd voorafgaand aan de installatie',
	'iTopUpdate:UI:CanCoreUpdate:Error' => 'Controle van het bestandssysteem is mislukt (%1$s)',
	'iTopUpdate:UI:CanCoreUpdate:ErrorFileNotExist' => 'Controle van het bestandssysteem mislukt (Bestand bestaat niet: %1$s)',
	'iTopUpdate:UI:CanCoreUpdate:Failed' => 'Controle van het bestandssysteem is mislukt',
	'iTopUpdate:UI:CanCoreUpdate:Loading' => 'Controle van het bestandssysteem',
	'iTopUpdate:UI:CanCoreUpdate:No' => 'Updaten van de toepassing is niet mogelijk: %1$s',
	'iTopUpdate:UI:CanCoreUpdate:Warning' => 'Waarschuwing: updaten van de toepassing kan mislukken: %1$s',
	'iTopUpdate:UI:CanCoreUpdate:Yes' => 'Updaten van toepassing is mogelijk',
	'iTopUpdate:UI:Cancel' => 'Annuleer',
	'iTopUpdate:UI:CannotUpdateUseSetup' => '<b>Aangepaste bestanden gedetecteerd</b>, gedeeltelijke update kan niet uitgevoerd worden.</br>Volg de <a target="_blank" href="%2$s">procedure</a> om '.ITOP_APPLICATION_SHORT.' manueel te updaten. Je moet de <a href="%1$s">setup</a> gebruiken om de applicatie te updaten.',
	'iTopUpdate:UI:CheckInProgress' => 'Even geduld terwijl de integriteitscontrole loopt',
	'iTopUpdate:UI:CheckUpdate' => 'Verifieer upgrade-bestand',
	'iTopUpdate:UI:ConfirmInstallFile' => 'Er zal een upgrade uitgevoerd worden met %1$s',
	'iTopUpdate:UI:Continue' => 'Volgende',
	'iTopUpdate:UI:CurrentVersion' => 'Huidige versie',
	'iTopUpdate:UI:DBDiskSpace' => 'Database schijfgebruik',
	'iTopUpdate:UI:DiskFreeSpace' => 'Vrije schijfruimte',
	'iTopUpdate:UI:DoBackup:Label' => 'Maak een backup van de bestanden en database',
	'iTopUpdate:UI:DoBackup:Warning' => 'Een backup maken wordt afgeraden doordat er weinig schijfruimte is',
	'iTopUpdate:UI:DoFilesArchive' => 'Archiveer toepassingsbestanden',
	'iTopUpdate:UI:DoUpdate' => 'Upgrade',
	'iTopUpdate:UI:FileUploadMaxSize' => 'Maximale bestandsgrootte (upload)',
	'iTopUpdate:UI:History' => 'Versiegeschiedenis',
	'iTopUpdate:UI:ItopDiskSpace' => ITOP_APPLICATION_SHORT.' schijfgebruik',
	'iTopUpdate:UI:MaintenanceModeActive' => 'De onderhoudsmode van deze toepassing is actief. Geen enkele gebruiker heeft momenteel toegang. Voer een setup of herstel uit om de onderhoudsmode te deactiveren.',
	'iTopUpdate:UI:NewVersion' => 'Nieuwe versie',
	'iTopUpdate:UI:PageTitle' => 'Upgraden toepassing',
	'iTopUpdate:UI:PostMaxSize' => 'PHP ini-waarde post_max_size: %1$s',
	'iTopUpdate:UI:Progress' => 'Voortgang van de upgrade',
	'iTopUpdate:UI:RestoreArchive' => 'Je kan de toepassing herstellen via het archief "%1$s"',
	'iTopUpdate:UI:RestoreBackup' => 'Je kan de database herstellen via het archief "%1$s"',
	'iTopUpdate:UI:RunSetup' => 'Setup uitvoeren',
	'iTopUpdate:UI:SelectUpdateFile' => 'Selecteer een upgrade-bestand om te uploaden',
	'iTopUpdate:UI:ServerFile' => 'Het pad van dit archief bestaat al op de server',
	'iTopUpdate:UI:Setup' => ITOP_APPLICATION_SHORT.' setup',
	'iTopUpdate:UI:SetupLaunch' => 'Start de '.ITOP_APPLICATION_SHORT.' setup',
	'iTopUpdate:UI:SetupLaunchConfirm' => 'Dit zal de '.ITOP_APPLICATION_SHORT.' setup uitvoeren, ben je zeker?',
	'iTopUpdate:UI:SetupMessage:Backup' => 'Maken van backup database',
	'iTopUpdate:UI:SetupMessage:CheckCompile' => 'Controleren van de upgrade van de toepassing',
	'iTopUpdate:UI:SetupMessage:Compile' => 'Upgraden van toepassing en database',
	'iTopUpdate:UI:SetupMessage:CopyFiles' => 'Kopiëren van nieuwe versies van bestanden',
	'iTopUpdate:UI:SetupMessage:EnterMaintenance' => 'Activeren van onderhoudsmode',
	'iTopUpdate:UI:SetupMessage:ExitMaintenance' => 'Deactiveren van onderhoudsmode',
	'iTopUpdate:UI:SetupMessage:FilesArchive' => 'Archiveren van de toepassingsbestanden',
	'iTopUpdate:UI:SetupMessage:Ready' => 'Klaar om verder te gaan',
	'iTopUpdate:UI:SetupMessage:UpdateDatabase' => 'Upgraden van database',
	'iTopUpdate:UI:SetupMessage:UpdateDone' => 'Upgrade voltooid',
	'iTopUpdate:UI:Status' => 'Status',
	'iTopUpdate:UI:UpdateDone' => 'Upgrade geslaagd',
	'iTopUpdate:UI:UploadArchive' => 'Selecteer een archief om te uploaden',
	'iTopUpdate:UI:UploadMaxFileSize' => 'PHP ini-waarde upload_max_filesize: %1$s',
	'iTopUpdate:UI:WarningReadOnlyDuringUpdate' => 'Tijdens de upgrade zal de applicatie enkel toegankelijk zijn als "alleen lezen".',
	'iTopUpdate:UI:WithDBBackup' => 'Backup database',
	'iTopUpdate:UI:WithFilesBackup' => 'Backup toepassingsbestanden',
	'iTopUpdate:UI:WithoutBackup' => 'Er is geen backup gepland',
	'itop-core-update/Operation:ConfirmUpdate/Title' => 'Upgrade',
	'itop-core-update/Operation:SelectUpdateFile/Title' => 'Upgrade',
	'itop-core-update/Operation:UpdateCoreFiles/Title' => 'Upgrade',
	'itop-core-update/Operation:UpdateDone/Title' => 'Upgrade voltooid',
	'itop-core-update:UI:ConfirmUpdate' => 'Upgrade',
	'itop-core-update:UI:SelectUpdateFile' => 'Upgrade',
	'itop-core-update:UI:UpdateCoreFiles' => 'Upgrade',
	'itop-core-update:UI:UpdateDone' => 'Upgrade voltooid',
]);
