import React from 'react';
import {Parallax, ParallaxLayer} from 'react-spring/renderprops-addons';
import Style from './GlowText.css'

const GlowText = props => {
	return(
		<div style={Style.HomeHero} className="glow_text">
				<div aria-hidden="true" style={{marginLeft: '80px'}}>
					<div className="glow noselect">
						<ParallaxLayer offset={.01} speed={2.4} className="green">
							import React from 'react';
						</ParallaxLayer>
						<ParallaxLayer offset={.029} speed={-1.4} className="green">
							import Style from './GlowText.css';
						</ParallaxLayer>
					</div>
				</div>
		</div>
	);
}

export default GlowText;
