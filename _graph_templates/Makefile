SRCDIR=.
BUILDDIR=../graph_templates

SRC=$(wildcard $(SRCDIR)/*.xml)
BUILD=$(SRC:$(SRCDIR)/%.xml=$(BUILDDIR)/%.xml)

all: templates

templates: $(BUILD)

$(BUILDDIR)/%.xml: $(SRCDIR)/%.xml
	xmllint -format -xinclude -o $@ $<

.PHONY: clean
clean:
	-rm $(BUILD)
