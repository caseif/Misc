#include <iostream>
#include <stdlib.h>
#include <string>

int main() {
	std::string woodo = "";
	woodo += "     _              __\n";
        woodo += "    / `\\  (~._    ./  )\n";
        woodo += "    \\__/ __`-_\\__/ ./\n";
        woodo += "   _ \\ \\/  \\   \\ |_    __\n";
        woodo += " (   )  \\__/ -^    \\  /  \\\n";
        woodo += "  \\_/ \"  \\  | o  o  | .. / __\n";
        woodo += "       \\\\. -' ====  /  || /  \\ \n";
        woodo += "         \\   .  .  |---__.\\__/\n";
        woodo += "         /  :     /   |   |\n";
        woodo += "         /   :   /     \\_/\n";
        woodo += "      --/ ::    (\n";
        woodo += "     (  |     (  (____\n";
        woodo += "   .--  .. ----**.____)\n";
        woodo += "   \\___/          \n";

	if (getenv("SUDO_COMMAND") != NULL) {
		std::cout << woodo << std::endl;
	} else {
		std::cout << "It's a weird tree." << std::endl;
	}
}

