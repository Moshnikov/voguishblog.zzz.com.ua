{"version":3,"sources":["notification_conference.js"],"names":["BX","namespace","Call","NotificationConference","Events","onButtonClick","config","this","popup","window","callerAvatar","type","isNotEmptyString","callerName","callbacks","onClose","isFunction","DoNothing","onDestroy","_onContentButtonClickHandler","_onContentButtonClick","bind","desktop","addCustomEvent","prototype","show","params","BXDesktopWindow","ExecuteCommand","BXDesktopSystem","getHtmlPage","JSON","stringify","content","NotificationConferenceContent","createPopup","render","PopupWindow","closeIcon","noAllPaddings","zIndex","MessengerCommon","getDefaultZIndex","offsetLeft","offsetTop","closeByEsc","draggable","restrict","overlay","backgroundColor","opacity","events","onPopupClose","onPopupDestroy","close","destroy","removeCustomEvents","e","elements","root","avatar","create","props","className","children","src","style","document","createTextNode","message","text","util","htmlspecialcharsback","click","_onAnswerConferenceButtonClick","_onSkipConferenceButtonClick","showInDesktop","body","appendChild","setWindowPosition","X","STP_CENTER","Y","STP_VCENTER","Width","Height","onCustomEvent","button"],"mappings":"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","file":"notification_conference.map.js"}