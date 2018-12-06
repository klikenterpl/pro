
function loadEditor(id,editorType)
{
    var instance = CKEDITOR.instances[id];
    if(instance)
    {
        CKEDITOR.remove(instance);
    }
    editor = CKEDITOR;
    editor.config.toolbar = editorType;
    editor.config.enterMode = CKEDITOR.ENTER_BR;
    editor.config.entities = false;
    editor.config.basicEntities = false;
    editor.config.uiColor = '#e5e5e5';
    
  		editor.config.toolbar_full =
    	[
    	    ['Save','-','Source','NewPage','Preview','-','Templates'],
    	    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
    	    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    	    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
    	    '/',
    	    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    	    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    	    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    	    ['BidiLtr', 'BidiRtl'],
    	    ['Link','Unlink','Anchor'],
    	    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
    	    '/',
    	    ['Styles','Format','Font','FontSize'],
    	    ['TextColor','BGColor'],
    	    ['Maximize', 'ShowBlocks','-','About'],
	    	['CreatePlaceholder']
    	];
    	
  		editor.config.toolbar_normal =
    	[
    	    ['Save','-','Source'],
    	    ['Cut','Copy','Paste','PasteText','PasteFromWord'],
    	    ['Undo','Redo','-','Find','Replace','RemoveFormat'],
    	    ['NumberedList','BulletedList','-','Outdent','Indent','CreateDiv'],
    	    '/',
    	    
    	    ['Bold','Italic','Underline','Strike'],
    	    ['TextColor','FontSize'],
    	    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    	    ['Link','Unlink'],
    	    ['Flash','Iframe','Table','HorizontalRule','SpecialChar'],
    	    
    	    ,['ShowBlocks','Maximize']
    	];  

	    	 	 
	    editor.config.toolbar_basic =
	    [
	        ['Save','-','Source','Undo','Redo'],
	        ['Bold','Italic','Underline', '-', 'NumberedList', 'BulletedList'],
	        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	        ['Link', 'Unlink'],
	        ['Maximize'],
	        ['CreatePlaceholder']
	    ];
	    
	    editor.config.toolbar_minimal_source =
			[
			    ['Save','Source','Bold', '-','Undo','Redo','-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Maximize']
			];		    
	    
	    editor.config.toolbar_minimal =
		[
		    ['Bold','Italic','Underline', '-','Undo','Redo','-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Maximize']
		];	    

	editor.replaceAll();  
}

