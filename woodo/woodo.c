#include <stdio.h>
#include <stdlib.h>

int main() {
	char *woodo = "\
             _              __\n\
            / `\\  (~._    ./  )\n\
            \\__/ __`-_\\__/ ./\n\
           _ \\ \\/  \\   \\ |_    __\n\
         (   )  \\__/ -^    \\  /  \\\n\
          \\_/ \"  \\  | o  o  | .. / __\n\
               \\\\. -' ====  /  || /  \\ \n\
                 \\   .  .  |---__.\\__/\n\
                 /  :     /   |   |\n\
                 /   :   /     \\_/\n\
              --/ ::    (\n\
             (  |     (  (____\n\
           .--  .. ----**.____)\n\
           \\___/         \n";

	if (getenv("SUDO_COMMAND")) {
		printf(woodo);
	} else {
		printf("It's a weird tree.\n");
	}
}

