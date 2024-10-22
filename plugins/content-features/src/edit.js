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
		features,
	} = attributes;

	const [ value, setValue ] = useState( '' );

	const addFeature = () => {
		setAttributes( {
			features: [
				...features,
				{
					col_class: '',
					col_style: '',
					col_id: '',
					col_inner_class: 'd-flex align-items-center justify-content-md-center',
					col_inner_style: '',
					data_aos: 'fade-up',
					data_aos_delay: '',
					title: '',
					title_class: 'bold',
					title_style: '',
					content: '',
					code_block: ''
				},
			],
		} );
	};

	const updateFeature = ( featureIndex, field, value ) => {
		setAttributes( {
			features: features.map( ( feature, index ) => {
				if ( index === featureIndex ) {
					return {
						...feature,
						[ field ]: value,
					};
				}
				return feature;
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
					title={ __( 'Feature Settings' ) }
					initialOpen={ false }
				>
					<button onClick={ () => addFeature() }>
						Add New Feature
					</button>
				</PanelBody>
			</InspectorControls>
			<section { ...useBlockProps() }>
				<img src={ section_image } alt="" />
				{ console.log( section_image ) }
				<div className="column-wrapper">
				{ features.map((feature, index) => {
    return (
        <div
            className={`column ${feature.col_class}`}
            style={{
                padding: '25px',
                borderBottom: '1px solid',
                marginBottom: '25px',
            }}
        >
            <div style={{ display: 'flex' }}>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Feature Class</p>
                    <input
                        type="text"
                        value={feature.col_class}
                        onChange={(content) =>
                            updateFeature(index, 'col_class', content.target.value)
                        }
                    />
                </div>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Feature Style</p>
                    <input
                        type="text"
                        value={feature.col_style}
                        onChange={(content) =>
                            updateFeature(index, 'col_style', content.target.value)
                        }
                    />
                </div>
                <div>
                    <p style={{ marginBottom: '0px' }}>Feature ID</p>
                    <input
                        type="text"
                        value={feature.col_id}
                        onChange={(content) =>
                            updateFeature(index, 'col_id', content.target.value)
                        }
                    />
                </div>
            </div>

            <div style={{ display: 'flex' }}>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Data AOS</p>
                    <input
                        type="text"
                        value={feature.data_aos}
                        onChange={(content) =>
                            updateFeature(index, 'data_aos', content.target.value)
                        }
                    />
                </div>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Data AOS Delay</p>
                    <input
                        type="text"
                        value={feature.data_aos_delay}
                        onChange={(content) =>
                            updateFeature(index, 'data_aos_delay', content.target.value)
                        }
                    />
                </div>
            </div>

            <div style={{ display: 'flex' }}>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Col Inner Class</p>
                    <input
                        type="text"
                        value={feature.col_inner_class}
                        onChange={(content) =>
                            updateFeature(index, 'col_inner_class', content.target.value)
                        }
                    />
                </div>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Col Inner Style</p>
                    <input
                        type="text"
                        value={feature.col_inner_style}
                        onChange={(content) =>
                            updateFeature(index, 'col_inner_style', content.target.value)
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
                            <strong>Feature Icon</strong>
                        </p>

                        <textarea
                            id="colCodeTextarea"
                            value={feature.code_block}
                            onChange={(content) =>
                                updateFeature(index, 'code_block', content.target.value)
                            }
                            placeholder={__('here goes text')}
                            style={{ width: '100%', height: '215px' }}
                        />
                    </div>
                    <div style={{ width: '49%' }}>
                        <p style={{ marginBottom: '0px' }}>
                            <strong>Feature Title</strong>
                        </p>
                        <RichText
                            value={feature.title}
                            style={{
                                background: 'white',
                                border: '.5px solid',
                                borderRadius: '4px',
                                padding: '15px',
                            }}
                            onChange={(content) =>
                                updateFeature(index, 'title', content)
                            }
                            placeholder={__('')}
                        />
						<div style={{ display: 'flex' }}>
                <div style={{ paddingRight: '25px' }}>
                    <p style={{ marginBottom: '0px' }}>Title Class</p>
                    <input
                        type="text"
                        value={feature.title_class}
                        onChange={(content) =>
                            updateFeature(index, 'title_class', content.target.value)
                        }
                    />
                </div>
                <div style={{ paddingRight: '24px' }}>
                    <p style={{ marginBottom: '0px' }}>Feature Style</p>
                    <input
                        type="text"
                        value={feature.title_style}
                        onChange={(content) =>
                            updateFeature(index, 'title_style', content.target.value)
                        }
                    />
                </div>
            </div>
						<p style={{ marginBottom: '0px' }}>
                            <strong>Feature Content</strong>
                        </p>
						<textarea
                            id="colCodeTextarea"
                            value={feature.content}
                            onChange={(content) =>
                                updateFeature(index, 'content', content.target.value)
                            }
                            placeholder={__('here goes text')}
                            style={{ width: '100%', height: '100px' }}
                        />
                    </div>
                </div>
            </div>

			<Button
    style={{
		border:'1px solid',
		background:'white'
	}}
	className={`button-hero`}
    onClick={() => {
        const newFeatures = [...features]; // Create a copy of the features array
        const newColumn = createNewColumn();
        newFeatures.splice(index, 0, newColumn); // Insert the new column at the current index
        setAttributes({ features: newFeatures }); // Update the features attribute with the new array
    }}
>
    {__('Add Column Above')}
</Button>
<Button
    style={{
		border:'1px solid',
		background:'white'
	}}
	className={`button-hero`}
    onClick={() => {
        const newFeatures = [...features]; // Create a copy of the features array
        const newColumn = createNewColumn();
        newFeatures.splice(index + 1, 0, newColumn); // Insert the new column at the current index
        setAttributes({ features: newFeatures }); // Update the features attribute with the new array
    }}
>
    {__('Add Column Below')}
</Button>
{/* Duplicate Button */}
<Button
style={{
	border:'1px solid',
	background:'white'
}}
className={`button-hero`}
onClick={() => {
const newFeatures = [...features];
const duplicateFeature = { ...feature }; // Copy the tab object
newFeatures.splice(index + 1, 0, duplicateFeature); // Insert the copy after the current tab
setAttributes({ features: newFeatures });
}}
>
{__('Duplicate Column')}
</Button>
<Button
style={{
	border:'1px solid',
	background:'peachpuff'
}}
className={`button-hero`}
isDestructive
onClick={() => {
const newFeatures = [...features];
newFeatures.splice(index, 1);
setAttributes({ features: newFeatures });
}}
>
{__('Remove Column')}
</Button>
{/* Move Up Button */}
<Button
style={{
	border:'1px solid',
	background:'white'
}}
className={`button-hero`}
onClick={() => {
	if (index === 0) return; // Prevent moving the first item up
	const newFeatures = [...features];
	const temp = newFeatures[index - 1];
	newFeatures[index - 1] = newFeatures[index];
	newFeatures[index] = temp;
	setAttributes({ features: newFeatures });
}}
disabled={index === 0} // Disable if it's the first item
>
{__('Move Up')}
</Button>

{/* Move Down Button */}
<Button
style={{
	border:'1px solid',
	background:'white'
}}
className={`button-hero`}
onClick={() => {
	if (index === features.length - 1) return; // Prevent moving the last item down
	const newFeatures = [...features];
	const temp = newFeatures[index + 1];
	newFeatures[index + 1] = newFeatures[index];
	newFeatures[index] = temp;
	setAttributes({ features: newFeatures });
}}
disabled={index === features.length - 1} // Disable if it's the last item
>
{__('Move Down')}
</Button>
        </div>
    );
})}

				</div>
			</section>
		</>
	);
}
