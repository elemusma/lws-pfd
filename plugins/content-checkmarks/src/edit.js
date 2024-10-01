/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	InspectorControls,
	useBlockProps,
	InnerBlocks,
	MediaUpload,
	MediaUploadCheck,
	RichText,
} from '@wordpress/block-editor';
import {
	Button,
	PanelBody,
	__experimentalInputControl as InputControl,
	TextControl,
} from '@wordpress/components';
import { useState, useEffect } from '@wordpress/element';
// import { DragDropContext, Droppable, Draggable } from 'react-beautiful-dnd';


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const {
		section_style,
		section_class,
		section_id,
		section_image,
		section_image_class,
		section_image_style,
		section_block,
		container_style,
		container_class,
		container_id,
		row_style,
		row_class,
		row_id,
		col_style,
		col_class,
		col_id,
		checkmarks,
	} = attributes;

	const [ value, setValue ] = useState( '' );

	const checkmarkIcon = `const checkmark = '
<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1170.21 1145.48">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
        stroke-width: 0px;
      }
    </style>
  </defs>
  <g id="Layer_1-2" data-name="Layer 1">
    <g id="OHQcBN.tif">
      <path class="cls-1" d="M75.64,533.32c30.18.6,57.09,7.34,83.63,15.82,48.96,15.65,95.74,36.58,141.81,59.13,26.01,12.73,51.73,26.07,77.49,39.31,3.19,1.64,4.98,1.67,7.51-1.26,36.59-42.31,72.96-84.82,110.12-126.62,33.07-37.21,66.82-73.81,100.66-110.31,55.72-60.08,112.95-118.71,171.89-175.63,56.07-54.15,113.52-106.78,175.68-154,30.79-23.4,62.49-45.46,97.6-62.06C1063.72,7.44,1086.12-.47,1110.55.02c13.35.27,25.99,3.6,37.47,10.72,19.8,12.26,27.1,33.62,18.85,55.42-5.06,13.36-13.75,24.39-23.53,34.41-18.37,18.82-37.31,37.09-55.91,55.68-41.21,41.2-83.04,81.8-123.36,123.85-55.12,57.5-105.64,119.01-153.58,182.62-85.27,113.15-159.78,233.08-225.51,358.53-50.88,97.11-96.21,196.76-136.56,298.68-5.15,13.02-13.1,22.48-27.31,24.96-15.31,2.67-28.22-3.75-36.12-17.44-14.48-25.09-28.7-50.33-43.35-75.31-45.67-77.88-93.52-154.34-147.95-226.51-47.85-63.45-101.14-121.96-159.28-176.1-6.58-6.13-12.82-12.68-19.8-18.3-13.8-11.1-16.5-25.52-13.52-41.78,5.67-30.98,28.25-51.51,60.21-54.93,5.45-.58,10.93-.91,14.35-1.19Z"/>
    </g>
  </g>
</svg>'`;

	const addCheckmark = () => {
		setAttributes( {
			checkmarks: [
				...checkmarks,
				{
					col_class: '',
					col_style: '',
					col_id: '',
					data_aos: 'fade-up',
					data_aos_delay: '',
					title: '',
					content: `<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1170.21 1145.48">
  <g id="Layer_1-2" data-name="Layer 1">
    <g id="OHQcBN.tif">
      <path fill="white" class="cls-1" d="M75.64,533.32c30.18.6,57.09,7.34,83.63,15.82,48.96,15.65,95.74,36.58,141.81,59.13,26.01,12.73,51.73,26.07,77.49,39.31,3.19,1.64,4.98,1.67,7.51-1.26,36.59-42.31,72.96-84.82,110.12-126.62,33.07-37.21,66.82-73.81,100.66-110.31,55.72-60.08,112.95-118.71,171.89-175.63,56.07-54.15,113.52-106.78,175.68-154,30.79-23.4,62.49-45.46,97.6-62.06C1063.72,7.44,1086.12-.47,1110.55.02c13.35.27,25.99,3.6,37.47,10.72,19.8,12.26,27.1,33.62,18.85,55.42-5.06,13.36-13.75,24.39-23.53,34.41-18.37,18.82-37.31,37.09-55.91,55.68-41.21,41.2-83.04,81.8-123.36,123.85-55.12,57.5-105.64,119.01-153.58,182.62-85.27,113.15-159.78,233.08-225.51,358.53-50.88,97.11-96.21,196.76-136.56,298.68-5.15,13.02-13.1,22.48-27.31,24.96-15.31,2.67-28.22-3.75-36.12-17.44-14.48-25.09-28.7-50.33-43.35-75.31-45.67-77.88-93.52-154.34-147.95-226.51-47.85-63.45-101.14-121.96-159.28-176.1-6.58-6.13-12.82-12.68-19.8-18.3-13.8-11.1-16.5-25.52-13.52-41.78,5.67-30.98,28.25-51.51,60.21-54.93,5.45-.58,10.93-.91,14.35-1.19Z"/>
    </g>
  </g>
</svg>`,
					code_block: ''
				},
			],
		} );
	};

	const updateCheckmark = ( checkmarkIndex, field, value ) => {
		setAttributes( {
			checkmarks: checkmarks.map( ( checkmark, index ) => {
				if ( index === checkmarkIndex ) {
					return {
						...checkmark,
						[ field ]: value,
					};
				}
				return checkmark;
			} ),
		} );
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Section' ) } initialOpen={ false }>
					<InputControl
						label="Section Style"
						value={ section_style }
						onChange={ ( nextValue ) =>
							setAttributes( { section_style: nextValue } )
						}
					/>
					<InputControl
						label="Section Class"
						value={ section_class }
						onChange={ ( nextValue ) =>
							setAttributes( { section_class: nextValue } )
						}
					/>
					<InputControl
						label="Section ID"
						value={ section_id }
						onChange={ ( nextValue ) =>
							setAttributes( { section_id: nextValue } )
						}
					/>
				</PanelBody>
				<PanelBody
					title={ __( 'Background Image' ) }
					initialOpen={ false }
				>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={ ( media ) =>
								setAttributes( { section_image: media.url } )
							}
							type="image"
							allowedTypes={ [ 'image' ] }
							value={ section_image }
							render={ ( { open } ) => (
								<div>
									{ section_image && (
										<Button
											isLink
											isDestructive
											onClick={ () =>
												setAttributes( {
													section_image: '',
												} )
											}
										>
											{ __( 'Remove Section Image' ) }
										</Button>
									) }
									<Button
										onClick={ open }
										icon="upload"
										className="editor-media-placeholder__button is-button is-default is-large"
									>
										{ __( 'Select Section Image' ) }
									</Button>
								</div>
							) }
						/>
					</MediaUploadCheck>

					<InputControl
						label="Background Image Class"
						value={ section_image_class }
						onChange={ ( nextValue ) =>
							setAttributes( { section_image_class: nextValue } )
						}
					/>
					<InputControl
						label="Background Image Style"
						value={ section_image_style }
						onChange={ ( nextValue ) =>
							setAttributes( { section_image_style: nextValue } )
						}
					/>
				</PanelBody>
				<PanelBody title={ __( 'Code Block' ) } initialOpen={ false }>
					<label style={ { lineHeight: '2' } }>Code Block</label>
					<textarea
						id="sectionStyleTextarea"
						value={ attributes.section_block }
						onChange={ ( event ) =>
							setAttributes( {
								section_block: event.target.value,
							} )
						}
						placeholder="Enter section block here"
						style={ { width: '100%', height: '100px' } }
					/>
				</PanelBody>
				<PanelBody title={ __( 'Container' ) } initialOpen={ false }>
					<InputControl
						label="Container Section Style"
						value={ container_style }
						onChange={ ( nextValue ) =>
							setAttributes( { container_style: nextValue } )
						}
					/>
					<InputControl
						label="Container Section Class"
						value={ container_class }
						onChange={ ( nextValue ) =>
							setAttributes( { container_class: nextValue } )
						}
					/>
					<InputControl
						label="Container Section ID"
						value={ container_id }
						onChange={ ( nextValue ) =>
							setAttributes( { container_id: nextValue } )
						}
					/>
				</PanelBody>
				<PanelBody title={ __( 'Row' ) } initialOpen={ false }>
					<InputControl
						label="Row Style"
						value={ row_style }
						onChange={ ( nextValue ) =>
							setAttributes( { row_style: nextValue } )
						}
					/>
					<InputControl
						label="Row Class"
						value={ row_class }
						onChange={ ( nextValue ) =>
							setAttributes( { row_class: nextValue } )
						}
					/>
					<InputControl
						label="Row ID"
						value={ row_id }
						onChange={ ( nextValue ) =>
							setAttributes( { row_id: nextValue } )
						}
					/>
				</PanelBody>
				
				<PanelBody
					title={ __( 'Checkmark Settings' ) }
					initialOpen={ false }
				>
					<InputControl
						label="Col Style"
						value={ col_style }
						onChange={ ( nextValue ) =>
							setAttributes( { col_style: nextValue } )
						}
					/>
					<InputControl
						label="Col Class"
						value={ col_class }
						onChange={ ( nextValue ) =>
							setAttributes( { col_class: nextValue } )
						}
					/>
					<InputControl
						label="Col ID"
						value={ col_id }
						onChange={ ( nextValue ) =>
							setAttributes( { col_id: nextValue } )
						}
					/>
					<button onClick={ () => addCheckmark() }>
						Add New Checkmark
					</button>
				</PanelBody>
			</InspectorControls>
			<section { ...useBlockProps() }>
				<img src={ section_image } alt="" />
				{ console.log( section_image ) }
				<div className="column-wrapper">
				{ checkmarks.map((checkmark, index) => {
    return (
        <div
            className={`column ${checkmark.col_class}`}
            style={{
                background: '#f7f7f7',
                padding: '25px',
                borderBottom: '1px solid',
                marginBottom: '25px',
            }}
        >
            <div style={{ display: 'flex' }}>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Checkmark Class</p>
                    <input
                        type="text"
                        value={checkmark.col_class}
                        onChange={(content) =>
                            updateCheckmark(index, 'col_class', content.target.value)
                        }
                    />
                </div>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Checkmark Style</p>
                    <input
                        type="text"
                        value={checkmark.col_style}
                        onChange={(content) =>
                            updateCheckmark(index, 'col_style', content.target.value)
                        }
                    />
                </div>
                <div>
                    <p style={{ marginBottom: '0px' }}>Checkmark ID</p>
                    <input
                        type="text"
                        value={checkmark.col_id}
                        onChange={(content) =>
                            updateCheckmark(index, 'col_id', content.target.value)
                        }
                    />
                </div>
            </div>

            <div style={{ display: 'flex' }}>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Data AOS</p>
                    <input
                        type="text"
                        value={checkmark.data_aos}
                        onChange={(content) =>
                            updateCheckmark(index, 'data_aos', content.target.value)
                        }
                    />
                </div>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Data AOS Delay</p>
                    <input
                        type="text"
                        value={checkmark.data_aos_delay}
                        onChange={(content) =>
                            updateCheckmark(index, 'data_aos_delay', content.target.value)
                        }
                    />
                </div>
            </div>

            <div style={{ display: 'flex', paddingTop: '25px' }}>
                <div
                    style={{
                        display: 'flex',
                        width: '100%',
                        justifyContent: 'space-between',
                    }}
                >
                    <div style={{ width: '49%' }}>
                        <p style={{ marginBottom: '0px' }}>
                            <strong>Checkmark Icon</strong>
                        </p>

                        <textarea
                            id="colCodeTextarea"
                            value={checkmark.content}
                            onChange={(content) =>
                                updateCheckmark(index, 'content', content.target.value)
                            }
                            placeholder={__('here goes text')}
                            style={{ width: '100%', height: '100px' }}
                        />
                    </div>
                    <div style={{ width: '49%' }}>
                        <p style={{ marginBottom: '0px' }}>
                            <strong>Checkmark Title</strong>
                        </p>
                        <RichText
                            value={checkmark.title}
                            style={{
                                background: 'white',
                                border: '.5px solid',
                                borderRadius: '4px',
                                padding: '15px',
                            }}
                            onChange={(content) =>
                                updateCheckmark(index, 'title', content)
                            }
                            placeholder={__('')}
                        />
                    </div>
                </div>
            </div>

            {/* Duplicate Button */}
            <Button
                style={{ border: '1px solid', marginTop: '10px' }}
                onClick={() => {
                    const newCheckmarks = [...checkmarks];
                    const duplicateCheckmark = { ...checkmark }; // Copy the checkmark object
                    newCheckmarks.splice(index + 1, 0, duplicateCheckmark); // Insert the copy after the current checkmark
                    setAttributes({ checkmarks: newCheckmarks });
                }}
            >
                {__('Duplicate Checkmark')}
            </Button>

            <Button
                style={{ border: '1px solid', marginTop: '10px' }}
                onClick={() => {
                    const newCheckmarks = [...checkmarks];
                    const newColumn = {
                        col_class: '',
                        col_style: '',
                        col_id: '',
                        data_aos: 'fade-up',
                        data_aos_delay: '',
                        title: 'new column',
                        content: 'new column content',
                    };
                    newCheckmarks.splice(index, 0, newColumn); // Insert the new column at the current index
                    setAttributes({ checkmarks: newCheckmarks });
                }}
            >
                {__('Add Checkmark Above')}
            </Button>

            <Button
                style={{ border: '1px solid', marginTop: '10px' }}
                isDestructive
                onClick={() => {
                    const newCheckmarks = [...checkmarks];
                    newCheckmarks.splice(index, 1);
                    setAttributes({ checkmarks: newCheckmarks });
                }}
            >
                {__('Remove Checkmark')}
            </Button>
        </div>
    );
})}

				</div>
			</section>
		</>
	);
}
