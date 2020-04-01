import EditorJS from '@editorjs/editorjs'; 
const List = require('@editorjs/list');
const Header = require('@editorjs/header');
const SimpleImage = require('@editorjs/simple-image');
const editorChecker = document.getElementById("editorjs");
const Table = require('@editorjs/table');

if( editorChecker ) {

    const editor = new EditorJS({
        autofocus: true,
        tools: {
            header: {
                class: Header,
                config: {
                placeholder: 'Typ een kop',
                levels: [1, 2, 3, 4, 5, 6],
                defaultLevel: 1,
                title: 'heading'
                }
            },
            list: { 
                class: List,
                inlineToolbar: true,
            },
            table: {
                class: Table,
            },
            image: {
                class: SimpleImage,
                inlineToolbar: true,
                config: {
                  placeholder: 'Paste image URL'
                }
            }
        }, 
    });

    $(document).click(function() {

        editor.save().then((outputData) => {
            console.log(outputData);
            $(".editor-data").val(JSON.stringify(outputData));
        }).catch((error) => {
            console.log('Saving failed: ', error)
        });
    });
}