Modulwahl
===

A proof-of-concept on how to choose courses for the next semester. Some courses have preconditions, some are not available in all semesters. 

Got the idea from the university of applied sciences I attended at time of development. To choose courses for the next semester we hat to consult 32 PDF files. Now I'm updating this project to a more current version of the Symfony framework.

Run locally (with docker)
---

__Prerequisites__

* PHP 8.1
* nginx
* MySQL 5.7

Or Docker compose installed on the machine. A configuration is part of this repo.

__Steps with docker__

1. clone this repo<br>`git clone https://github.com/steffengrahl/modulwahl.git`
2. change into folder modulwahl<br>`cd modulwahl`
3. start the docker containers<br>`docker compose up --build`
4. access the app at http://localhost:8080

License
---

This software is released under MIT license. To see all conditions have a look at [LICENSE](LICENSE)

Contribution
---

Please do not contribute. This is just a proof-of-concept to demonstrate how I would start an app like this. I will not accept any pull requests.

Authors
---

1. steffengrahl (https://github.com/steffengrahl)
