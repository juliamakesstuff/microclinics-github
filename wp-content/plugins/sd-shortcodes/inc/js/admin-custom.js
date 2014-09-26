/*jslint browser: true*/
/*global $, jQuery, send_to_editor, tb_remove, wp*/
jQuery(document).ready(function ($) {

    "use strict";

/* ------------------------------------------------------------------------ */
/* Shortcode Menu                                                           */
/* ------------------------------------------------------------------------ */

    $('.sd-shortcode-menu li ul').hide();

    $('.sd-shortcode-menu').hover(function () {
        $(this).find('ul').stop(true, true).slideDown('slow');
    },
        function () {
            $(this).find('ul').stop(true, true).slideUp('slow');
        });

    $(document).ajaxComplete(function () {
        var c = 1;

        //send columns to editor
        $('#sd-send-columns').unbind('click').click(function () {

            send_to_editor($('#sd-option-columns :selected').text() + $('#sd-option-columns-content').val() + $('#sd-option-columns :selected').val());

            tb_remove();
            return false;
        });

        //send video to editor
        $('#sd-send-video').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'id'       : '',
                'type'     : '',
                'align'    : '',
                'autoplay' : ''
            };

            shortcode = '[sd_video';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-video-' + index).val();

                // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

         //send framed image to editor
        $('#sd-send-framed-image').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'align': ''
            };

            shortcode = '[framed_image';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-framed-image-' + index).val();

                    //attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']' + $('#sd-option-framed-image').val() + '[/framed_image]';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        //send highlight to editor
        $('.sd-colorpicker').each(function () {
            $(this).wpColorPicker();
        });

        $('#sd-send-highlight').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'bg'   : '',
                'text' : ''
            };

            shortcode = '[highlight';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-highlight-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']' + $('#sd-option-highlight-content').val() + '[/highlight]';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        //send tooltip to editor

        $('#sd-send-tooltip').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'text': ''
            };

            shortcode = '[tooltip';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-tooltip-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']' + $('#sd-option-tooltip-content').val() + '[/tooltip]';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        // custom uploader gmap

        $('.upload_image_button').click(function (e) {

            var custom_uploader;

            e.preventDefault();

            //If the uploader object has already been created, reopen the dialog
            if (custom_uploader) {
                custom_uploader.open();
                return;
            }

            //Extend the wp.media object
            custom_uploader = wp.media.frames.file_frame = wp.media({
                title: 'Insert Image',
                button: {
                    text: 'Insert Image'
                },
                multiple: false
            });

            //When a file is selected, grab the URL and set it as the text field's value
            custom_uploader.on('select', function () {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#sd-option-gmap-markerimage').val(attachment.url);
            });
			
			custom_uploader.on('select', function () {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#sd-option-person-photo').val(attachment.url);
            });
			
            //Open the uploader dialog
            custom_uploader.open();

        });

        //send gmap to editor

        $('#sd-send-gmap').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'id' : '',
                'address' : '',
                'lat' : '',
                'lon' : '',
                'zoom' : '',
                'width' : '',
                'height' : '',
                'maptype' : '',
                'marker' : '',
                'markerimage' : '',
                'traffic' : '',
                'bike' : '',
                'infowindow' : '',
                'infowindowdefault' : '',
                'hidecontrols' : '',
                'scale' : '',
                'scrollwheel' : ''
            };

            shortcode = '[googlemap';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-gmap-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        //send toggle to editor

        $('#sd-send-toggle').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'title' : ''
            };

            shortcode = '[toggle';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-toggle-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']' + $('#sd-option-toggle-content').val() + '[/toggle]';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        //send tabs to editor

        $(".sd-add-tabs").click(function () {

            var form, new_form;

            form = $('#sd-tabs-table0');
            new_form = form.clone().attr('id', 'sd-tabs-table' + c);

            new_form.find(":input").attr({value: ''});

            $('.sd-submit-button').before(new_form);
            c += 1;
        });

        $('#sd-send-tabs').unbind('click').click(function () {

            var tabs = '', shortcode;

            $(".sd-page-content table").each(function () {

                var title, content;

                title = $(this).find('.sd-option-tab-title').val();
                content = $(this).find('.sd-option-tab-content').val();

                tabs += '[tab title="' + title + '"]' + content + '[/tab]\n';
            });

            shortcode = '[tabs]\n' + tabs + '[/tabs]';

            send_to_editor(shortcode);

            return false;
        });

        //send accordion to editor

        $(".sd-add-accordion").click(function () {

            var fields, new_fields;

            fields = $('#sd-accordion-table0');
            new_fields = fields.clone().attr('id', 'sd-accordion-table' + c);

            new_fields.find(":input").attr({value: ''});

            $('.sd-last-div').before(new_fields);
            c += 1;
        });

        $('#sd-send-accordion').unbind('click').click(function () {

            var accordions = '', acstate, acstatetrue, shortcode;

            $(".sd-accordion-content-inputs table").each(function () {

                var title, content;

                title = $(this).find('.sd-option-accordion-title').val();
                content = $(this).find('.sd-option-accordion-content').val();

                accordions += '[accordion title="' + title + '"]' + content + '[/accordion]\n';
            });

            acstate = $('#sd-option-accordion-state').val();

            if (acstate === 'open') {

                acstatetrue = ' state="open"';

            } else { acstatetrue = ''; }

            shortcode = '[accordions' + acstatetrue + ']\n' + accordions + '[/accordions]';

            send_to_editor(shortcode);

            return false;
        });

        //send colored button to editor

        $('#sd-send-button').unbind('click').click(function () {

            var options, shortcode, index, value;

            options = {
                'link' : '',
                'target' : '',
                'bgcolor' : '',
                'textcolor' : '',
                'size' : '',
                'radius' : '',
                'align' : '',
                'rel' : ''
            };

            shortcode = '[button';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-button-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']' + $('#sd-option-button-content').val() + '[/button]';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });
		
		//send full bg to editor

        $('#sd-send-full').unbind('click').click(function () {

            var options, shortcode, index, value;

            options = {
                'bg' : '',
                'text' : ''
            };

            shortcode = '[sd_full_bg';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-full-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += '] [/sd_full_bg]';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        //send skill to editor

        $('#sd-send-skill').unbind('click').click(function () {

            var options, shortcode, index, value;

            options = {
                'title' : '',
                'color' : '',
                'percentage' : ''
            };

            shortcode = '[skill';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-skill-' + index).val();

                    //attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });

        //send accordion to editor

        $(".sd-add-pricing").click(function () {

            var fields, new_fields;

            fields = $('#sd-pricing-table0');
            new_fields = fields.clone(true).attr('id', 'sd-pricing-table' + c);

            new_fields.find(":input").attr({value: ''});

            $('.sd-submit-button').before(new_fields);
            c += 1;
        });

        $('#sd-send-pricing').unbind('click').click(function () {

            var columns = '', shortcode;

            $(".sd-page-content table").each(function () {

                var featured, width, title, price, decimals, desc, button_text, button_url, button_target, button_rel, button_color, border_color, content;

                featured = $(this).find('.sd-option-pricing-featured').val();
                width = $(this).find('.sd-option-pricing-width').val();
                title = $(this).find('.sd-option-pricing-title').val();
                price = $(this).find('.sd-option-pricing-price').val();
                decimals = $(this).find('.sd-option-pricing-decimals').val();
                desc = $(this).find('.sd-option-pricing-desc').val();
                button_text = $(this).find('.sd-option-pricing-button_text').val();
                button_url = $(this).find('.sd-option-pricing-button_url').val();
                button_target = $(this).find('.sd-option-pricing-button_target').val();
                button_rel = $(this).find('.sd-option-pricing-button_rel').val();
                button_color = $(this).find('.sd-option-pricing-button_color').val();
                border_color = $(this).find('.sd-option-pricing-border_color').val();
                content = $(this).find('.sd-option-pricing-content').val();

                columns += '[pricing_column width="' + width + '" featured="' + featured + '" title="' + title + '" price="' + price + '" decimals="' + decimals + '" desc="' + desc + '" button_text="' + button_text + '" button_url="' + button_url + '" button_target="' + button_target + '" button_rel="' + button_rel + '" button_color="' + button_color + '" border_color="' + border_color + '"]' + content + '\n[/pricing_column]\n';
            });

            shortcode = '[pricing_table]\n' + columns + '[/pricing_table]';

            send_to_editor(shortcode);

            return false;
        });

        //send divider to editor
        $('#sd-send-divider').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'type'   : 'space',
                'margintop' : '',
                'marginbottom' : ''
            };

            shortcode = '[divider';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-divider-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });
		
		
		
		//send latest blog to editor
		
		$('#sd-send-latest-blog').unbind('click').click(function () {

            var blog = '';

            $(".sd-page-content table").each(function () {

                var searchIDs;

				searchIDs = $(".sd-page-content input:checkbox:checked").map(function(){
			        return this.value;
			    }).toArray();

                blog += '[sd_blog cats="' + searchIDs + '"]\n';
            });

            send_to_editor(blog);

            return false;
        });
		
		//send centered to editor
		
		$('#sd-centered').unbind('click').click(function () {
			send_to_editor('[sd_centered] [/sd_centered]')
			return false;
		});
		
		//donation bar
		
		$('#sd-bar').unbind('click').click(function () {
			send_to_editor('[sd_percentage]')
			return false;
		});
		
		//latest donations
		
		$('#sd-donations').unbind('click').click(function () {
			send_to_editor('[sd_donations]')
			return false;
		});
		
		//send person to editor
		
		$('#sd-send-person').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'name'   : 'space',
                'subtitle' : '',
                'photo' : '',
				'facebook' : '',
				'twitter' : '',
				'googleplus' : '',
				'linkedin' : ''
            };

            shortcode = '[sd_person';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-person-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']';

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });
		
		//send action box to editor
		
		$('#sd-send-box').unbind('click').click(function () {

            var shortcode, options, index, value;

            options = {
                'bgcolor'   : '',
                'textcolor' : ''
            };

            shortcode = '[sd_action_box';

            for (index in options) {
                if (options.hasOwnProperty(index)) {
                    value = $('.sd-page-content').find('#sd-option-box-' + index).val();

                    // attaches the attribute to the shortcode only if it's different from the default value
                    if (value !== options[index]) {
                        shortcode += ' ' + index + '="' + value + '"';
                    }
                }
            }

            shortcode += ']' + $('#sd-option-box-content').val() + '[/sd_action_box]';;

            send_to_editor(shortcode);

            tb_remove();
            return false;
        });
		
		
		

    });
});
/* ------------------------------------------------------------------------ */
/* EOF                                                                      */
/* ------------------------------------------------------------------------ */