FROM ubuntu:latest

RUN sed -i 's/archive.ubuntu.com/mirror.lzu.edu.cn/g' /etc/apt/sources.list && \
	apt-get update && \
 	apt-get install nmap -y && \
	rm -rf /var/lib/apt/lists/*

COPY ./show.sh /
RUN chmod a+x /show.sh

ENTRYPOINT ["ncat", "-klp", "80", "-c", "/show.sh"]
