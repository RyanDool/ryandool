import React from 'react';
import {Parallax, ParallaxLayer} from 'react-spring/renderprops-addons';
import { GlowText } from './components';
import HeroBg from './img/home-hero.jpg';
import './App.css';

class App extends React.Component {
    render(){
        return(
			<div className="App">
				<Parallax pages={2} style={{backgroundImage: `url(${HeroBg})`, backgroundSize: 'cover'}} ref={ref => (this.parallax = ref)}>
					<GlowText />
				</Parallax>
			</div>
		);
	};
};

export default App;
