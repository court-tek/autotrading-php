import { navigation } from "./navigation";
import { welcomeSlider } from "./welcomeSlider";
import { autoFilter } from "./autoFilter";

let init = () => { // init function initializes the slider
  navigation();
  welcomeSlider();
  autoFilter();
}

init();

