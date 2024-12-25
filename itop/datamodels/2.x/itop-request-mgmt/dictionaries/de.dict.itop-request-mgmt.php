<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author ITOMIG GmbH <martin.raenker@itomig.de>
 *
 */
Dict::Add('DE DE', 'German', 'Deutsch', [
	'Class:Problem:KnownProblemList' => 'Bekannte Problems',
	'Class:UserRequest' => 'Benutzeranfrage',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Genehmiger-E-Mail',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:approver_id' => 'Genehmiger',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Zuweisungsdatum',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Kumulierte Auszeit',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'Eskalations-Flag',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Nein',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Ja',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '',
	'Class:UserRequest/Attribute:escalation_reason' => 'Eskalationsgrund',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:impact' => 'Auswirkung',
	'Class:UserRequest/Attribute:impact+' => 'Die Auswirkung gibt die Schwere des Vorfalls an, oft geschätzt durch die Anzahl der Betroffenen',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Eine Abteilung',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Ein Service',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Eine Person',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'Letztes Auszeit-Datum',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:origin' => 'Herkunft',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:chat' => 'Chat',
	'Class:UserRequest/Attribute:origin/Value:chat+' => 'Benutzeranfrage auf Basis einer Diskussion in einem Chat',
	'Class:UserRequest/Attribute:origin/Value:in_person' => 'Persönlich',
	'Class:UserRequest/Attribute:origin/Value:in_person+' => 'Benutzeranfrage auf Basis einer Diskussion im direkten Gespräch',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Mail',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'Benutzeranfrage auf Basis einer empfangenen Mail',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'Benutzeranfrage auf Basis eines Monitoring-Events',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Telefon',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'Benutzeranfrage auf Basis eines Telefonanrufs',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portal',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'Benutzeranfrage, die über das Portal erstellt wurde',
	'Class:UserRequest/Attribute:parent_change_id' => 'Parent-Change',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Referenz Change',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Parent-Problem',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Referenz Problem',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Parent-Request',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'Parent-Benutzeranfrage-Anzeigename',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Referenz Benutzeranfrage',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Auszeitgrund',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:priority' => 'Priorität',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Kritisch',
	'Class:UserRequest/Attribute:priority/Value:1+' => '',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Hoch',
	'Class:UserRequest/Attribute:priority/Value:2+' => '',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Mittel',
	'Class:UserRequest/Attribute:priority/Value:3+' => '',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Niedrig',
	'Class:UserRequest/Attribute:priority/Value:4+' => '',
	'Class:UserRequest/Attribute:public_log' => 'Öffentliches Log',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Abgeleitete Requests',
	'Class:UserRequest/Attribute:related_request_list+' => 'Alle abgeleitete Anfragen, die mit dieser Benutzeranfrage verknüpft sind',
	'Class:UserRequest/Attribute:request_type' => 'Request-Typ',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incident',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Service-Request',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '',
	'Class:UserRequest/Attribute:resolution_code' => 'Lösungs-Code',
	'Class:UserRequest/Attribute:resolution_code+' => 'Was wurde unternommen, um die Anfrage zu lösen?',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Unterstützung',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Bugfix',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Hardware-Reparatur',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Andere',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Software-Patch',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'System-Update',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Schulung',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Lösungsdatum',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Service',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Service-Name',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Service-Unterkategorie',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Service-Unterkategorie-Name',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA TTO überschritten',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA TTO verletzt',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA TTR überschritten',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA TTR verletzt',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:solution' => 'Lösung',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:status' => 'Status',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Genehmigt',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Zugewiesen',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Geschlossen',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Eskaliert TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Eskaliert TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'Neu',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Auszeit',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Abgelehnt',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Gelöst',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Wartend auf Genehmigung',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Lösungsdauer',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO (Time To Own)',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO-Deadline',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR (Time To Resolve)',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR-Deadline',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:urgency' => 'Dringlichkeit',
	'Class:UserRequest/Attribute:urgency+' => 'Wie schnell der Vorfall behandelt werden muss',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Kritisch',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Hoch',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Mittel',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Niedrig',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '',
	'Class:UserRequest/Attribute:user_comment' => 'Benutzer-Kommentar',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Benutzerzufriedenheit',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Sehr zufrieden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Ziemlich zufrieden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Eher unzufrieden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Sehr unzufrieden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Kann Ticket nicht als eigenes Parent-Ticket verwenden',
	'Class:UserRequest/Method:ResolveChildTickets' => 'Kind-Tickets lösen',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Lösung auf Kind-Tickets übertragen (ev_autoresolve), und folgende Ticket-Eigenschaften angleichen: Service, Team, Agent, Lösungsinformationen',
	'Class:UserRequest/Stimulus:ev_approve' => 'Genehmigen',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Zuweisen',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatisch geschlossen',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatisch gelöst',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Diesen Request schließen',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'Auszeit',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Erneut zuweisen',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Ablehnen',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Wiedereröffnen',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Als gelöst markieren',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Auf Genehmigung warten',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest:KnownErrorList' => 'Known Errors',
	'Class:UserRequest:KnownErrorList+' => 'Dokumentiere Fehler im Zusammenhang mit CIs, die mit dem aktuellen Ticket verknüpft sind',
	'Menu:NewUserRequest' => 'Neue Benutzeranfrage',
	'Menu:NewUserRequest+' => 'Neue Benutzeranfrage erstellen',
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => 'Verwaltung von Nutzeranfragen und Störungsmeldungen',
	'Menu:RequestManagementProvider' => 'Helpdesk-Provider',
	'Menu:RequestManagementProvider+' => '',
	'Menu:SearchUserRequests' => 'Nach Benutzeranfrage suchen',
	'Menu:SearchUserRequests+' => 'Nach bestehenden Benutzeranfragen suchen',
	'Menu:UserRequest:EscalatedRequests' => 'Eskalierte Benutzeranfragen',
	'Menu:UserRequest:EscalatedRequests+' => 'Eskalierte Benutzeranfragen',
	'Menu:UserRequest:MyRequests' => 'Mir zugewiesene Benutzeranfragen',
	'Menu:UserRequest:MyRequests+' => '',
	'Menu:UserRequest:MySupportRequests' => 'Von mir gestellte Anfragen',
	'Menu:UserRequest:MySupportRequests+' => 'Benutzeranfragen die ich gemeldet habe',
	'Menu:UserRequest:MyWorkOrders' => 'Mir zugeordnete Arbeitsaufträge',
	'Menu:UserRequest:MyWorkOrders+' => '',
	'Menu:UserRequest:OpenRequests' => 'Alle offenen Benutzeranfragen',
	'Menu:UserRequest:OpenRequests+' => 'Alle offenen Benutzeranfragen',
	'Menu:UserRequest:Overview' => 'Übersicht',
	'Menu:UserRequest:Overview+' => 'Übersicht über Benutzeranfragen',
	'Menu:UserRequest:Provider' => 'Offene Benutzeranfragen beim Provider',
	'Menu:UserRequest:Provider+' => '',
	'Menu:UserRequest:Shortcuts' => 'Shortcuts',
	'Menu:UserRequest:Shortcuts+' => '',
	'Organization:Overview:MyUserRequests' => 'Mir zugewiesene Benutzeranfragen dieser Organisation',
	'Organization:Overview:Tickets' => 'Alle Tickets dieser Organisation',
	'Organization:Overview:UserRequests' => 'Benutzeranfragen dieser Organisation',
	'Portal:Button:CreateRequestFromService' => 'Eine Benutzeranfrage betreffend dieses Dienstes erzeugen',
	'Portal:ButtonClose' => 'Schließen',
	'Portal:ButtonReopen' => 'Wiedereröffnen',
	'Portal:ButtonUpdate' => 'Update',
	'Portal:ChooseYourFavoriteLanguage' => 'Wählen Sie Ihre bevorzugte Sprache',
	'Portal:Details-Service-Element' => 'Service-Elemente',
	'Portal:LanguageChangedTo_Lang' => 'Spracheinstellung geändert auf: ',
	'Portal:ListOpenProblems' => 'Offene Problems',
	'Portal:ListOpenRequests' => 'Offene Benutzeranfragen auflisten',
	'Portal:ListServices' => 'Liste der Services',
	'Portal:NoClosedTicket' => 'Keine geschlossene Benutzeranfrage',
	'Portal:NoOpenProblem' => 'Keine offenen Problems',
	'Portal:NoService' => 'Kein Service',
	'Portal:SelectLanguage' => 'Ändern Sie Ihre Spracheinstellung',
	'Portal:SelectRequestType' => 'Wählen Sie den Typ der Anfrage',
	'Portal:SelectServiceElementFrom_Service' => 'Wählen Sie ein Service-Element für %1$s',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:ShowProblem' => 'Problems',
	'Portal:ShowServices' => 'Service-Katalog',
	'Portal:TitleDetailsFor_Request' => 'Details für Benutzeranfrage',
	'Portal:TitleDetailsFor_Service' => 'Details für Service',
	'Portal:UserRequest:MoreInfo' => 'Weitere Informationen',
	'Tickets:Related:OpenIncidents' => 'Offene Incidents',
	'UI-RequestManagementOverview-Last-14-days' => 'Benutzeranfragen der letzten 14  Tage nach Tag',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Offene Benutzeranfragen nach Bearbeiter',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Offene Benutzeranfragen nach Organisation',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Offene Benutzeranfragen nach Status',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Offene Benutzeranfragen nach Typ',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Benutzeranfragen der letzten 14  Tage nach Typ',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Mir zugewiesene Benutzeranfragen',
]);