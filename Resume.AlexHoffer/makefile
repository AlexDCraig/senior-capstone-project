TEX     = writeup1
CC      = gcc
LDFLAGS = -lpthread -pthread -lm -lrt
CFLAGS  = -std=c99 -Wall -g
TARGET  = homework1
INCLUDE = 
SOURCE  = homework1.c

default: all

.PHONY: help clean all default

all: pdf

help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  all          to build writeup and homework1 executable"
	@echo "  homework1      to build an executable"
	@echo "  pdf          to build the writeup"
	@echo "  clean        to remove unused files"

clean:
	-rm *.o *.out *.dvi *.log *.aux *.ps 2> /dev/null

pdf: ${TEX}.tex 
	latex $(TEX).tex
	dvips -R -Poutline -t letter ${TEX}.dvi -o ${TEX}.ps
	ps2pdf ${TEX}.ps

main: $(SOURCE) $(INCLUDE)
	$(CC) $(CFLAGS) $(SOURCE) -o $(TARGET) $(LDFLAGS)
