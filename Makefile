.DEFAULT_GOAL := install

dev:
	npm run dev

export:
	npm run export

export-en: slides-en export
	mv slides-export.pdf tas-about-en.pdf

export-fr: slides-fr export
	mv slides-export.pdf tas-about-fr.pdf

install:
	npm install
	make slides-en

slides-en: remove-slides-file
	ln -s slides-en.md slides.md

slides-fr: remove-slides-file
	ln -s slides-fr.md slides.md

remove-slides-file:
	rm -f slides.md