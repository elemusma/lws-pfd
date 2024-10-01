/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */

import { useBlockProps, InnerBlocks, RichText } from '@wordpress/block-editor';
import { RawHTML } from '@wordpress/element';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {Element} Element to render.
 */
export default function save( { attributes } ) {
	const blockProps = useBlockProps.save();
	return (
		<div { ...blockProps }>
			<section
				className={ `position-relative ${ attributes.section_class }` }
				style={ `${ attributes.section_style }` }
				id={ attributes.section_id }
			>
				{/* <div className="column-wrapper"> */}
				{ attributes.section_image && (
					<img
						src={ attributes.section_image }
						alt=""
						className={ `w-100 h-100 position-absolute bg-img ${ attributes.section_image_class }` }
						style={ `top:0;left:0;object-fit:cover;pointer-events:none;${ attributes.section_image_style }` }
					/>
				) }

				<RawHTML>{ attributes.section_block }</RawHTML>

				<div
					className={ attributes.container_class }
					style={ attributes.container_style }
					id={ attributes.container_id }
				>
					<div
						className={ attributes.row_class }
						style={ attributes.row_style }
						id={ attributes.row_id }
					>

{
  attributes.features.map((feature, index) => {
    return (
        <div className={`position-relative text-center ${feature.col_class}`} style={`padding:15px;${feature.col_style}`} data-aos={feature.data_aos} data-aos-delay={feature.data_aos_delay} data-aos-offset="0">
          
          <div className={``}>
            <div className={`${feature.col_inner_class}`} style={`${feature.col_inner_style}`}>
			<div className={`d-flex align-items-center justify-content-center`} style={`min-width:35px;height:35px;background:white;border-radius:50%;margin-right:10px;padding: 7px;`}>
			<RawHTML>{feature.code_block}</RawHTML>
			</div>
			<div>
		  	<h3 className={`h4 ${feature.title_class}`} style={feature.title_style}><RichText.Content value={feature.title} /></h3>
			<span>{feature.content}</span>
			</div>
            </div>
          </div>
        </div>
    );
  })
}



				</div>
				</div>
			</section>
		</div>
	);
}
