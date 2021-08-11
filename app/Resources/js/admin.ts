import "@github/markdown-toolbar-element";
import "@github/time-elements";
import ClientTimezone from "./modules/ClientTimezone";
import Clipboard from "./modules/Clipboard";
import DateTimePicker from "./modules/DateTimePicker";
import Dropdown from "./modules/Dropdown";
import "./modules/markdown-preview";
import "./modules/markdown-write-preview";
import MultiSelect from "./modules/MultiSelect";
import "./modules/permalink-edit";
import PublishMessageWarning from "./modules/PublishMessageWarning";
import Select from "./modules/Select";
import SidebarToggler from "./modules/SidebarToggler";
import Slugify from "./modules/Slugify";
import Soundbites from "./modules/Soundbites";
import ThemePicker from "./modules/ThemePicker";
import Time from "./modules/Time";
import Tooltip from "./modules/Tooltip";
import "./modules/xml-editor";

Dropdown();
Tooltip();
Select();
MultiSelect();
Slugify();
SidebarToggler();
ClientTimezone();
DateTimePicker();
Time();
Soundbites();
Clipboard();
ThemePicker();
PublishMessageWarning();
