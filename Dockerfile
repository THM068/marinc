FROM openjdk:8-jdk-alpine 
RUN apk --no-cache add curl
COPY build/libs/*.jar marinc.jar
CMD java ${JAVA_OPTS} -jar marinc.jar