FROM alpine:3.7

RUN apk --update --no-cache add \
    python3 \
    && python3 -m ensurepip --upgrade \
    && rm -r /usr/lib/python*/ensurepip

COPY . /pelican/
WORKDIR /pelican/

RUN pip3 install -r ./requirements.txt \
    && rm -r /root/.cache

ENTRYPOINT ["pelican", "content", "-o", "output", "-s", "configuration.py"]
